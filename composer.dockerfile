FROM composer:2

RUN addgroup -g 2000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

WORKDIR /var/www/html
