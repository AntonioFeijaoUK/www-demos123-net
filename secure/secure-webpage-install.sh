#!/bin/bash

## website: https://security.demos123.net
##
## Demos123.net - Testing https://console.aws.amazon.com/acm/home?region=us-east-1#/
## Demo on AWS Certificate Manager
##
##  @FeijaoUK
##  Date: 2018-03-12
##

## Selecting working directory
cd /tmp

## **REMOVE** any version of apache and php
yum remove -y httpd* php*

## updating OS
yum -y update


## **INSTALL** specific version of apache and php
yum -y install httpd jq php


## Download index.html file
cd /var/www/html
wget https://raw.githubusercontent.com/feijaouk/demos123.net/master/secure/index.php


## Turn website on on start and start web server now
systemctl enable httpd.service 
systemctl start httpd.service 

reboot
