FROM php:5.6-apache

WORKDIR /var/www/html

COPY ./public /var/www/html

RUN docker-php-ext-install pdo pdo_mysql mysqli

EXPOSE 80
