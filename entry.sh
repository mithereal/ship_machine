#!/bin/sh

# start cron
/usr/sbin/crond -f -l 8

# fetch amazon mws node 
npm i amazon-mws

