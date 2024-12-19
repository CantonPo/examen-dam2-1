# Usar una imagen base oficial de PHP con Apache
FROM php:8.1-apache

# Actualiza la lista de paquetes e instala las dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libmariadb-dev-compat \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli

# Habilitar mod_rewrite en Apache
RUN a2enmod rewrite

# Copiar los archivos de la aplicación al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80



