FROM nginx:stable-alpine

RUN set -x \
    && deluser www-data \
	&& addgroup -g 82 -S www-data \
	&& adduser -u 82 -D -S -G www-data www-data

COPY ./nginx.conf /etc/nginx
COPY ./default.conf /etc/nginx/conf.d