FROM php:8.2-apache

# Instalar mysqli
RUN docker-php-ext-install mysqli

# Activar mod_rewrite si quieres usar URLs bonitas (opcional)
RUN a2enmod rewrite
