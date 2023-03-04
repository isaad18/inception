# Base image
FROM debian:buster

# Install packages
RUN apt-get update && apt-get install -y \
	wget \
	curl \
	bash \
	php \
	php-cgi \
	php-mysql \
	php-fpm \
	php-pdo \
	php-gd php-cli \
	php-mbstring \
	redis \
	php-redis \
	&& rm -rf /var/lib/apt/lists/*

# Download and extract WordPress
RUN wget -q https://wordpress.org/latest.tar.gz && \
    tar -xzf latest.tar.gz && \
    rm latest.tar.gz && \
    mkdir -p /var/www/html && \
    mv wordpress /var/www/html/

# Download and install wp-cli
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

# secure php
RUN sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/7.3/fpm/php.ini

# create the PID file
RUN mkdir -p /run/php

# Copy configuration files
COPY ./config/www.conf /etc/php/7.3/fpm/pool.d

# make php config file
COPY ./config/wp-config.php /var/www/html/wp-config.php

# Set ownership and permissions for /var/www/html directory
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose the default PHP-FPM port
EXPOSE 3000

ENTRYPOINT [ "bash", "-c" ]
CMD [ "php-fpm7.3" ]