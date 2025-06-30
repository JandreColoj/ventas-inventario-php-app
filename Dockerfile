# Usamos una imagen oficial de PHP 5.6 con Apache
FROM php:5.6-apache

# Instalamos extensiones comunes, por ejemplo mysql y mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiamos el código fuente al contenedor
COPY ./ /var/www/html/

RUN chown -R www-data:www-data /var/www/html/templates_c

# Exponemos el puerto 80
EXPOSE 80
