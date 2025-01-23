# Usar la imagen oficial de PHP con Apache
FROM php:8.0-apache

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Instalar extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar archivos de configuración de Apache (si tienes configuraciones personalizadas)
COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./config/ports.conf /etc/apache2/ports.conf

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Establecer permisos correctos para los archivos
RUN chown -R www-data:www-data /var/www/html

# Configurar Apache para usar el puerto dinámico proporcionado por Railway (en este caso 8080)
ENV PORT=8080
RUN sed -i "s/80/${PORT}/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Exponer el puerto 8080
EXPOSE 8080

# Iniciar Apache
CMD ["apache2-foreground"]
