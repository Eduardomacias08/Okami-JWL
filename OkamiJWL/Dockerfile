# Usar una imagen oficial de PHP
FROM php:8.3-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install mysqli pdo pdo_mysql gd

# Configurar el directorio de trabajo
WORKDIR /var/www/html/

# Copiar el código fuente de tu proyecto al contenedor
COPY . /var/www/html/

# Exponer el puerto configurado por Railway
EXPOSE 80

# Hacer que Apache esté activo
CMD ["apache2-foreground"]
