FROM php:7.4-apache

RUN apt-get -y update --fix-missing
RUN apt-get upgrade -y

# Set php.ini
COPY ./php/php.ini /usr/local/etc/php/

# Install useful tools
RUN apt-get -y install apt-utils nano wget dialog

# Install important libraries
RUN apt-get -y install --fix-missing apt-utils build-essential git curl  libcurl4 libcurl4-openssl-dev zip

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug



# Other PHP7 Extensions
RUN apt-get -y install libsqlite3-dev libsqlite3-0 mariadb-client
RUN git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install redis

RUN docker-php-ext-install curl
RUN docker-php-ext-install tokenizer
# RUN docker-php-ext-install json

RUN apt-get -y install zlib1g-dev
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip

RUN apt-get -y install libicu-dev
RUN docker-php-ext-install -j$(nproc) intl
RUN apt install -y libmcrypt-dev

# RUN docker-php-ext-install mbstring
RUN docker-php-ext-install bcmath

RUN apt-get install -y wget libjpeg-dev libfreetype6-dev
RUN apt-get install -y  libmagick++-dev \
libmagickwand-dev \
libpq-dev \
libfreetype6-dev \
libjpeg62-turbo-dev \
libpng-dev \
libwebp-dev \
libxpm-dev

RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd
RUN pecl install mcrypt-1.0.4
RUN docker-php-ext-enable mcrypt

# Enable apache modules
RUN a2enmod rewrite headers
RUN a2enmod ssl


WORKDIR /var/www/html
ADD . /var/www/html
RUN chown -R www-data:www-data /var/www