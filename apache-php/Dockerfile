# Usar la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Copiar los archivos de tu proyecto al contenedor
COPY . /var/www/html/

# Asegurarse de que los archivos sean accesibles
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80




