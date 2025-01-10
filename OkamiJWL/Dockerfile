# Usar una imagen oficial de PHP
FROM php:8.1-apache

# Instalar dependencias (si las necesitas, por ejemplo, para MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar el código fuente de tu proyecto al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80
