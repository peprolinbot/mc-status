FROM composer as builder

WORKDIR /app/

COPY composer.* ./
RUN composer install

FROM php:7.2-apache

WORKDIR /var/www/html

COPY public public
COPY templates templates
COPY --from=builder /app/vendor vendor

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
