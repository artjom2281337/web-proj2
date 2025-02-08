FROM php:8.0-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite
#copy php.ini 
COPY ./php.ini /usr/local/etc/php/
