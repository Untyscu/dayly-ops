FROM php:8.3.8-apache

RUN a2enmod rewrite
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY ./wordpress /var/www/html 