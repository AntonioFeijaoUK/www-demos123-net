#!/bin/bash

# update OS
yum update -y

# Install Apache Web Server and PHP
yum remove -y httpd php
yum install -y httpd24 php56


# Download Lab files
cd /tmp
wget http://demos123.net/tier1-demo/tier1-demo.tar
untar -zxvf tier1-demo.tar -d /tmp/
mv /tmp/tier1-demo/* /var/www/html/


# Turn on web server
chkconfig httpd on
service httpd start
