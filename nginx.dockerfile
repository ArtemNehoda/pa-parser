FROM nginx:stable-alpine

ADD ./docker/nginx/nginx.conf /etc/nginx/
ADD ./docker/nginx/default.conf /etc/nginx/conf.d/

RUN mkdir -p /var/www/html

RUN addgroup -g 2000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN chown laravel:laravel /var/www/html