#!/bin/bash

# Install Apache Web Server and PHP and utils
yum remove -y httpd php
yum install -y httpd24 php56 wget gzip 

# update OS
yum update -y

# Download Lab files
cd /tmp

wget http://demos123.net/autoscalling/autoscalling-www.zip

unzip autoscalling-www.zip

mv autoscalling-www/* /var/www/html

echo " $(date) version 3" > /var/www/html/version.txt

# Turn on web server
chkconfig httpd on
service httpd start
