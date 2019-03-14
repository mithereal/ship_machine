#!/bin/sh

# fetch amazon orders.
/nodejs/fetch_amazon_orders.js
php /php/fetch_ebay_orders.php