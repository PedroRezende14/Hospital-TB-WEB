FROM php:8.1-apache

# Instalar dependências básicas
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql sockets

# Configurar o Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Definir o diretório seguro para o Git
RUN git config --global --add safe.directory /var/www/html

# Configurar o código
WORKDIR /var/www/html
COPY . .

# Instalar dependências do Composer
RUN composer install --no-dev --optimize-autoloader

# Habilitar permissões
RUN chown -R www-data:www-data /var/www/html

# Configurar o Apache
EXPOSE 80
CMD ["apache2-foreground"]
