#
#--------------------------------------------------------------------------
# Image Setup
#--------------------------------------------------------------------------
#

FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y libzip-dev zip unzip
#install SQLite

EXPOSE 5006

# start FPM
CMD ["php-fpm"]