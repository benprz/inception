
cd /var/www
sed -i "s/MYSQL_DATABASE/$MYSQL_DATABASE/" /wp-config.php
sed -i "s/MYSQL_USER/$MYSQL_USER/" /wp-config.php
sed -i "s/MYSQL_PASSWORD/$MYSQL_PASSWORD/" /wp-config.php
cp /wp-config.php /var/www/
wp-cli --allow-root core install --url=$URL --title=Inception --admin_user=inception --admin_password=inception --admin_email=contact@inception.dev
wp-cli --allow-root user create bperez bperez@42lyon.fr --user_pass=bperez

/usr/sbin/php-fpm7.3 -F -R
