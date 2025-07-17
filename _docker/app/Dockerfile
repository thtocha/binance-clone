FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libpng-dev \
    libzip-dev \
    zip unzip \
    git curl \
    libonig-dev \
    libxml2-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libmcrypt-dev \
    libxslt-dev \
    && docker-php-ext-install pdo_mysql bcmath gd zip mysqli

COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin
