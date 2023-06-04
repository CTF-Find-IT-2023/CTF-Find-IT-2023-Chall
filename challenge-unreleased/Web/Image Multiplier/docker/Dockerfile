#
#--------------------------------------------------------------------------
# Image Setup
#--------------------------------------------------------------------------
#

FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y libzip-dev zip unzip
# install python
RUN apt-get install -y python3
RUN apt-get install -y python3-pip
RUN pip3 install requests
RUN pip3 install Pillow
RUN pip3 install os-sys
RUN pip3 install numpy

EXPOSE 5010

# start FPM
CMD ["php-fpm"]
