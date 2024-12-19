# Usar la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instalar las dependencias para MySQL y habilitar la extensión mysqli
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libmysqlclient-dev \
    && docker-php-ext-configure mysqli --with-mysqli \
    && docker-php-ext-install mysqli

# Activar mod_rewrite de Apache
RUN a2enmod rewrite

# Copiar los archivos de tu proyecto al contenedor
COPY . /var/www/html/

# Asegurarse de que los archivos sean accesibles
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80




