FROM debian:buster

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

RUN wget https://wordpress.org/latest.tar.gz -P /tmp && \
    tar xzf /tmp/latest.tar.gz -C /tmp && \
    rm /tmp/latest.tar.gz && \
    mkdir -p /var/www/html && \
    mv /tmp/wordpress/* /var/www/html && \
    rm -rf /tmp/wordpress



ENTRYPOINT [ "sleep", "infinity" ]