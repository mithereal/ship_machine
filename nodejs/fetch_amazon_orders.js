#!/usr/bin/env node

var MWS_ACCESS_KEY_ID = process.env.AWS_ACCESS_KEY_ID || 'AWS_ACCESS_KEY_ID';
var MWS_SECRET_ACCESS_KEY = process.env.AWS_SECRET_ACCESS_KEY || 'AWS_SECRET_ACCESS_KEY';
var MWS_AUTH_TOKEN = process.env.AWS_AUTH_TOKEN || 'AWS_AUTH_TOKEN';
var MWS_SELLER_ID = process.env.AWS_SELLER_ID || 'AWS_SELLER_ID';
var MWS_MARKET_PLACE_ID = process.env.AWS_MARKET_PLACE_ID || 'AWS_MARKET_PLACE_ID';

var amazonMws = require('amazon-mws')(MWS_ACCESS_KEY_ID,MWS_SECRET_ACCESS_KEY);


var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

function showOrder(item, index, arr) {
    console.log('item:', item)
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

if(orders != null){

    orders.forEach(showOrder)

}else{
    console.log('response', 'there were no orders')
}