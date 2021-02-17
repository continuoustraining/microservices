FROM php:7.4-apache

COPY . /var/www/html

RUN docker-php-ext-install pdo pdo_mysql opcache

# Set timezone
RUN echo 'date.timezone=Europe/Paris' > /usr/local/etc/php/php.ini
RUN echo 'log_errors=On' >> /usr/local/etc/php/php.ini

COPY ci/scripts/entrypoint.sh /usr/bin/

RUN chmod +x /usr/bin/entrypoint.sh

RUN chown -R www-data:www-data /var/www/*

WORKDIR /var/www/

ENTRYPOINT ["/usr/bin/entrypoint.sh"]