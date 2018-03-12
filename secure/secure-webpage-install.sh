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
yum install -y httpd jq


## Download index.html file
cd /var/www/html
wget https://raw.githubusercontent.com/feijaouk/demos123.net/master/secure/index.html

## Getting EC2 metadata
EC2_DOCUMENT=`curl --silent http://169.254.169.254/latest/dynamic/instance-identity/document`

echo -e "This machine was built on $(date) /n
script version control 2017-10-20-1709 /n
${EC2_DOCUMENT} " > version.html

## Turn website on on start and start web server now
systemctl enable httpd.service 
systemctl start httpd.service 
