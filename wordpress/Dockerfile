FROM debian:latest

RUN    apt update && apt upgrade -y

RUN    apt install -y php-fpm

COPY ./config/www.conf /etc/php/7.4/fpm/pool.d

ENTRYPOINT [ "sleep", "infinity" ]