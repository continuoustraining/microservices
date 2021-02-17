FROM: php:7.4-apache

COPY . /var/www/html

RUN pecl install redis-5.1.1 \
    && docker-php-ext-install zip pdo pdo_mysql opcache redis
    
CMD php ci/database.php
    