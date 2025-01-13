# Usar la imagen oficial de PHP con Apache
FROM php:8.0-apache

# Habilitar el módulo de PHP para MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copiar los archivos de tu proyecto al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80

# Configuración del servidor Apache
CMD ["apache2-foreground"]
