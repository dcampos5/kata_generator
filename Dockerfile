#FROM php:7.4-fpm
# Set working directory
#WORKDIR /var/www
#COPY . /var/www/

FROM php:7-apache
WORKDIR /var/www/html/
COPY . /var/www/html/
EXPOSE 80