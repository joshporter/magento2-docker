FROM nginx:stable-alpine
MAINTAINER Josh Porter <josh@joshporter.co.uk>

RUN set -x \
#    && deluser www-data \
	&& addgroup -g 82 -S www-data \
	&& adduser -u 82 -D -S -G www-data www-data

COPY nginx.conf /etc/nginx
COPY *.conf /etc/nginx/conf.d/
COPY m2docker.cert /etc/ssl
COPY m2docker.key /etc/ssl