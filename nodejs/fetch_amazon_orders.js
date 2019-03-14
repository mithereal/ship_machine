#!/usr/bin/env node

var MWS_ACCESS_KEY_ID = process.env.AWS_ACCESS_KEY_ID || 'AWS_ACCESS_KEY_ID';
var MWS_SECRET_ACCESS_KEY = process.env.AWS_SECRET_ACCESS_KEY || 'AWS_SECRET_ACCESS_KEY';
var MWS_AUTH_TOKEN = process.env.AWS_AUTH_TOKEN || 'AWS_AUTH_TOKEN';
var MWS_SELLER_ID = process.env.AWS_SELLER_ID || 'AWS_SELLER_ID';
var MWS_MARKET_PLACE_ID = process.env.AWS_MARKET_PLACE_ID || 'AWS_MARKET_PLACE_ID';

var MWS_MARKET_PLACE_ID = process.env.AWS_MARKET_PLACE_ID || 'AWS_MARKET_PLACE_ID';

var amazonMws = require('amazon-mws')(MWS_ACCESS_KEY_ID,MWS_SECRET_ACCESS_KEY);

var AMPQ_HOST = process.env.AMPQ_HOST || 'AMPQ_HOST';
var AMPQ_PORT = process.env.AMPQ_PORT || 'AMPQ_PORT';
var AMPQ_USER = process.env.AMPQ_USER || 'AMPQ_USER';
var AMPQ_PASS = process.env.AMPQ_PASS || 'AMPQ_PASS';
var AMPQ_VHOST = process.env.VAMPQ_HOST || 'AMPQ_VHOST';

var q = 'amazon_orders';
 
var open = require('amqplib').connect(AMPQ_HOST);


var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

var convert = require('xml-js');

function streamOrder(order){
    open.then(function(conn) {
        return conn.createChannel();
      }).then(function(ch) {
        return ch.assertQueue(q).then(function(ok) {
          return ch.sendToQueue(q, Buffer.from(order));
        });
      }).catch(console.warn);
}

function streamConsole(){
    // Consumer
    open.then(function(conn) {
        return conn.createChannel();
      }).then(function(ch) {
        return ch.assertQueue(q).then(function(ok) {
          return ch.consume(q, function(msg) {
            if (msg !== null) {
              console.log(msg.content.toString());
              ch.ack(msg);
            }
          });
        });
      }).catch(console.warn);
    } 

function getItems(xml){
    var result = convert.xml2json(xml, {compact: true, spaces: 4});

    var response = result["ListOrderItemsResponse"]["ListOrderItemsResult"]["OrderItems"];

    return response;
}

function getOrders(xml){
    var result = convert.xml2json(xml, {compact: true, spaces: 4});

    var response = result["ListOrdersResponse"]["ListOrdersResult"]["Orders"];

    return response;
}


var orders = amazonMws.orders.search({
    'Version': '2013-09-01',
    'Action': 'ListOrders',
    'SellerId': MWS_SELLER_ID,
    'MWSAuthToken': MWS_AUTH_TOKEN,
    'MarketplaceId.Id.1': MWS_MARKET_PLACE_ID,
    'LastUpdatedAfter': new Date(yyyy, mm, dd),
    'OrderStatus.Status.1': 'Pending',
    'OrderStatus.Status.2': 'Canceled'
}, function (error, response) {
    if (error) {
        console.log('error ', error);
        return null;
    }
    console.log('response', response);
    return response;
});

var orderRequest = function (id) {
    amazonMws.orders.search({
        'Version': '2013-09-01',
        'Action': 'ListOrderItems',
        'SellerId': MWS_SELLER_ID,
        'MWSAuthToken': MWS_AUTH_TOKEN,
        'AmazonOrderId': id
    }, function (error, response) {
        if (error) {
            console.log('error ', error);
            return null;
        }
        console.log('response', response);
        return response;
    });
};

if(orders != null){
    var orders = getOrders(xml);

    orders.forEach(streamOrder)

}else{
    console.log('response', 'there were no orders')
}