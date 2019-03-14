<?php
require 'vendor/autoload.php';

set_time_limit (0);

define('DIR_LIBRARY',       '/php/library/');

require_once(DIR_LIBRARY . 'ebatNs/EbatNs_Session.php');
require_once(DIR_LIBRARY . 'ebatNs/EbatNs_ServiceProxy.php');
require_once(DIR_LIBRARY . 'ebatNs/EbatNs_DataConverter.php');
require_once(DIR_LIBRARY . 'ebatNs/GetMyeBaySellingRequestType.php');
require_once(DIR_LIBRARY . 'ebatNs/GetOrdersRequestType.php');

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exchange\AMQPExchangeType;
use PhpAmqpLib\Message\AMQPMessage;

$exchange = 'router';
$queue = 'ebay_orders';

$app_mode = getenv('MODE');

$dev_id = getenv('EBAY_DEV_ID');
$app_id = getenv('EBAY_APP_ID');
$cert_id = getenv('EBAY_CERT_ID');
$token = getenv('EBAY_AUTH_TOKEN');

$ampq_host = getenv('AMPQ_HOST');
$ampq_port = getenv('AMPQ_PORT');
$ampq_user = getenv('AMPQ_USER');
$ampq_pass = getenv('AMPQ_PASS');
$ampq_vhost = getenv('AMPQ_VHOST');

$last_update = null;

$connection = new AMQPStreamConnection($ampq_host, $ampq_port, $ampq_user, $ampq_pass, $ampq_vhost);
$channel = $connection->channel();
$channel->queue_declare($queue, false, true, false, false);

$channel->exchange_declare($exchange, AMQPExchangeType::DIRECT, false, true, false);
$channel->queue_bind($queue, $exchange);

function streamOrder($order){

$messageBody = implode(' ', array_slice($argv, 1));
$message = new AMQPMessage($messageBody, array('content_type' => 'text/plain', 'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT));
$channel->basic_publish($message, $exchange);
    return null;
}


if($app_mode != 'production'){
$mode = 1;
}else{
$mode = 0;
}


$session = new EbatNs_Session();
$session->setSiteId(0);
$session->setUseHttpCompression(1);
$session->setAppMode($mode);
$session->setDevId($dev_id);
$session->setAppId($app_id);
$session->setCertId($cert_id);
$session->setRequestToken($token);
$session->setTokenUsePickupFile(false);
$session->setTokenMode(true);

$proxy = new EbatNs_ServiceProxy($session, 'EbatNs_DataConverterUtf8');

$getorders = new GetOrdersRequestType();

if(empty($last_update)){
$getorders->setNumberOfDays(5);
}else{
$dt = new DateTime($last_update);
$getorders->setCreateTimeFrom($last_update);
$getorders->setCreateTimeTo($dt->format('Y-m-d H:i:s'));
}

$getorders->addDetailLevel("ReturnAll");
$getorders->setOrderStatus('Completed');

$response = $proxy->GetOrders($getorders);


foreach($response->getOrderArray() as $o){
    $data['salesrecordnumber']=$o->ShippingDetails->SellingManagerSalesRecordNumber;
    $data['store_id']=$store_id;
    $data['user_id']=$o->BuyerUserID;
    $data['paid_time']=$o->PaidTime;
    $data['shipped_time']=$o->ShippedTime;
    $data['name']=$o->ShippingAddress->Name;
    $data['address']=$o->ShippingAddress->Street1;
    $data['city']=$o->ShippingAddress->CityName;
    $data['state']=$o->ShippingAddress->StateOrProvince;
    $data['country']=$o->ShippingAddress->Country;
    $data['zip']=$o->ShippingAddress->PostalCode;
    $data['phone']=$o->ShippingAddress->Phone;
    $data['ebay_order_id']=$o->OrderID;
    $data['extended_order_id']=$o->ExtendedOrderID;
    $data['created']=$o->CreatedTime;
    $data['modified']=$o->CreatedTime;
    $data['shipping_service']=$o->ShippingServiceSelected->ShippingService;
    $data['shipping_currency']=$o->ShippingServiceSelected->ShippingServiceCost->attributeValues['currencyID'];
    $data['paymentmethod']=$o->CheckoutStatus->PaymentMethod;
    $data['orderstatus']=$o->OrderStatus;
    $data['subtotal']=$o->Subtotal->value;
    $data['total']=$o->Total->value;
    $data['amountpaid']=$o->AmountPaid->value;
    $data['transactions']=$o->TransactionArray;
    $orders[]=$data;
}


foreach($orders as $order){
    streamOrder($order);
}

$channel->close();
$connection->close();

echo ":ok";