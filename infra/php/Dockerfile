FROM php:8.2-fpm

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql pdo_pgsql pdo

WORKDIR /var/www/project

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' |  bash
RUN apt-get install symfony-cli -y

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN chmod 777 /var/www/project

COPY ../ /var/www/project

RUN composer install



