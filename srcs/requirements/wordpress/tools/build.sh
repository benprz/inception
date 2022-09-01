#!/bin/bash

mkdir -p /run/php
sed -i "s/\/run\/php\/php7.3-fpm.sock/9000/" /etc/php/7.3/fpm/pool.d/www.conf

wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp-cli

mkdir -p /var/www
cd /var/www
wp-cli --allow-root core download
