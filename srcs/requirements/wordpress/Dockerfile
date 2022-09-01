FROM debian:buster

RUN	apt-get update\
	&& apt-get install -y \
	wget \
	php7.3 \
	php7.3-bcmath \
	php7.3-bz2 \
	php7.3-intl \
	php7.3-gd \
	php7.3-mbstring \
	php7.3-mysql \
	php7.3-xml \
	php7.3-zip \
	php7.3-fpm

COPY conf/wp-config.php /

COPY tools/build.sh /
COPY tools/entrypoint.sh /
RUN chmod +x /build.sh
RUN chmod +x /entrypoint.sh

RUN /build.sh && rm /build.sh

#EXPOSE 9000

ENTRYPOINT /entrypoint.sh
