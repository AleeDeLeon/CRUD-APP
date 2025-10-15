FROM php:8.2-apache

# mysqli
RUN docker-php-ext-install mysqli

# Activar mod_rewrite
RUN a2enmod rewrite
