FROM php:8.0-apache as base

COPY . /var/www/html

RUN chmod 644 /var/www/html/.htaccess 
RUN chmod -R 755 /var/www/html/

RUN a2enmod rewrite 
RUN service apache2 restart