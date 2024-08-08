FROM php:7.4-apache

# Instala as extensões necessárias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copia os arquivos do diretório atual para o diretório raiz do Apache
COPY src/ /var/www/html/

# Exponha a porta 80 para o contêiner
EXPOSE 80
