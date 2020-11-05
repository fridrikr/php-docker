FROM php:7.4-apache
RUN docker-php-ext-install pdo pdo_mysql

# Install Postgre PDO
#RUN apt-get install -y libpq-dev \
#    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#    && docker-php-ext-install pdo pdo_pgsql pgsql

COPY src/ /var/www/html/