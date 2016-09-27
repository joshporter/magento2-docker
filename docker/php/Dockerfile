FROM php:7.0-fpm-alpine
MAINTAINER Josh Porter <josh@joshporter.co.uk>

RUN	echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories && \
    apk update && \
	apk upgrade && \
    apk add --update \
        autoconf gcc g++ make ssmtp wget libjpeg-turbo-dev libpng-dev libxpm-dev libwebp-dev freetype-dev icu-dev libxslt-dev libmcrypt-dev && \
    rm -rf /var/cache/apk/*

RUN docker-php-ext-configure \
    gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-webp-dir=/usr/include/ --with-xpm-dir=/usr/include/

RUN docker-php-ext-install \
  gd \
  intl \
  mcrypt \
  pdo_mysql \
  xsl \
  zip

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN echo "sendmail_path = /usr/sbin/ssmtp -t" > /usr/local/etc/php/conf.d/sendmail.ini && \
    echo "mailhub=mail:25\nUseTLS=NO\nFromLineOverride=YES" > /etc/ssmtp/ssmtp.conf

COPY conf/php.ini /usr/local/etc/php
COPY conf/crontab /tmp
COPY conf/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d
COPY conf/php-fpm.conf /usr/local/etc/php-fpm.d
COPY bin/* /usr/local/bin/

CMD ["/usr/local/bin/start"]