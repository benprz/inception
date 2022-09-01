FROM debian:buster
RUN apt-get update && apt-get install -y nginx openssl

COPY /conf/default /etc/nginx/sites-enabled/

RUN chown -R www-data:www-data /var/www/
RUN chmod 755 /var/www/

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private.key -out /etc/ssl/certificate.crt -subj "/C=FR/ST=ALyonRA/L=Lyon/O=42/OU=bperez/CN=localhost/emailAddress=bperez@student.42-lyon.fr"

EXPOSE 443

CMD nginx -g "daemon off;"
