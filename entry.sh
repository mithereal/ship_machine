#!/bin/sh

#install redbean
cd php/api
url=http://www.redbeanphp.com/downloadredbean.php
wget $url --output-document="redbeanphp.tar.gz"
tar xvf redbeanphp.tar.gz

# fetch amazon mws node 
npm i amazon-mws --save
npm i mysql --save
npm i xml-js --save

chmod +x /nodejs/fetch_amazon_orders.js

# start cron
/usr/sbin/crond -f -l 8

