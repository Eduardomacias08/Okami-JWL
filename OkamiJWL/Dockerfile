# Usar la imagen oficial de PHP con Apache
FROM php:8.0-apache

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Instalar extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Configurar Apache para usar el puerto dinámico
ENV PORT=80
RUN sed -i "s/80/${PORT}/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Exponer el puerto (esto ya no es crítico porque Railway lo gestiona)
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]

