FROM php:7.4-apache

# Copia os arquivos do diretório atual para o diretório raiz do Apache
COPY src/ /var/www/html/

# Exponha a porta 80 para o contêiner
EXPOSE 80
