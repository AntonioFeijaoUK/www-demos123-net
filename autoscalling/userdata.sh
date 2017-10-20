#!/bin/bash

# Selecting working directory
cd /tmp

## initialising log file
### output redirect - https://stackoverflow.com/questions/876239/how-can-i-redirect-and-append-both-stdout-and-stderr-to-a-file-with-bash
echo $(date) > logs-install.logs 2>&1

# Remove any version of apache and php
yum remove -y httpd* php* >> logs-install.logs 2>&1

# updating OS
yum update -y >> logs-install.logs 2>&1


# Intalling specific version of apache and php
yum install -y httpd24 php56 >> logs-install.logs 2>&1


# Download Lab files
wget https://raw.githubusercontent.com/feijaouk/demos123.net/master/autoscalling/index.php -O /var/html/www/index.php >> logs-install.logs 2>&1

echo -e "This machine was built on $(date)
script version control 2017-10-20-1709" > /var/www/html/version.txt

# Turn website on on start and start web server now
chkconfig httpd on >> logs-install.logs 2>&1
service httpd start >> logs-install.logs 2>&1
