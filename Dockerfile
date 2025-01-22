FROM php:8.2-apache


RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/html
COPY . .

RUN composer update --lock --no-interaction
RUN composer install --prefer-dist --no-dev --no-progress --no-interaction

ENTRYPOINT ["sh", "-c", "php /var/www/html/migration.php && apache2-foreground"]
