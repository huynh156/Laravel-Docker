# Use the official PHP 8.3 image with Apache
FROM php:8.3-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli 

RUN apt update; apt install vim -y

RUN a2enmod rewrite

RUN mkdir /app

WORKDIR /app

COPY . /app

EXPOSE 80

CMD ["apache2-foreground"]