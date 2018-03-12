#!/bin/bash

## website: https://security.demos123.net
##
## Demos123.net - Testing https://console.aws.amazon.com/acm/home?region=us-east-1#/
## AWS Certificate Manager
##
##  @FeijaoUK
##

## Selecting working directory
cd /tmp

## **REMOVE** any version of apache and php
yum remove -y httpd* php*

## updating OS
#yum update -y //remove before going online


## **INSTALL** specific version of apache and php
yum install -y httpd 


# Download Lab website files
cd /var/www/html
wget https://raw.githubusercontent.com/feijaouk/demos123.net/master/autoscalling/index.php
wget https://raw.githubusercontent.com/feijaouk/demos123.net/master/autoscalling/stress-on.php
wget https://raw.githubusercontent.com/feijaouk/demos123.net/master/autoscalling/stress-off.php

echo -e "This machine was built on $(date) /n script version control 2017-10-20-1709" > version.txt

# Turn website on on start and start web server now
chkconfig httpd on >> logs-install.logs 2>&1
service httpd start >> logs-install.logs 2>&1
