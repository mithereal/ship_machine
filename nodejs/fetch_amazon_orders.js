#!/usr/bin/env node

var MWS_ACCESS_KEY_ID = process.env.AWS_ACCESS_KEY_ID || 'AWS_ACCESS_KEY_ID';
var MWS_SECRET_ACCESS_KEY = process.env.AWS_SECRET_ACCESS_KEY || 'AWS_SECRET_ACCESS_KEY';
var MWS_AUTH_TOKEN = process.env.AWS_AUTH_TOKEN || 'AWS_AUTH_TOKEN';
var MWS_SELLER_ID = process.env.AWS_SELLER_ID || 'AWS_SELLER_ID';
var MWS_MARKET_PLACE_ID = process.env.AWS_MARKET_PLACE_ID || 'AWS_MARKET_PLACE_ID';

var MWS_MARKET_PLACE_ID = process.env.AWS_MARKET_PLACE_ID || 'AWS_MARKET_PLACE_ID';

var amazonMws = require('amazon-mws')(MWS_ACCESS_KEY_ID,MWS_SECRET_ACCESS_KEY);

var mysql      = require('mysql');

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : process.env.MYSQL_USER,
  password : process.env.MYSQL_PASSWORD,
  database : process.env.MYSQL_DATABASE
})



var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

var convert = require('xml-js');


function insertOrder(item, index, arr) {
    var id = item["AmazonOrderId"];

    var xml = orderRequest(id);

    var result = convert.xml2json(xml, {compact: true, spaces: 4});

    var items = result["ListOrderItemsResponse"]["ListOrderItemsResult"]["OrderItems"];

    var query = "INSERT INTO amazon_orders(AmazonOrderId, serialized) VALUES(id,items);"
 
connection.query(query, function (error, results, fields) {
  if (error) throw error;
  console.log('inserted' + id);
});
 
    console.log('item:', id)

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
    var orders_obj = convert.xml2json(xml, {compact: true, spaces: 4});
    
    connection.connect();

    orders_obj["ListOrdersResponse"]["ListOrdersResult"]["Orders"].forEach(insertOrder)

    connection.end();

}else{
    console.log('response', 'there were no orders')
}