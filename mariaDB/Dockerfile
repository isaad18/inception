FROM debian:buster

RUN    apt update && apt upgrade -y

RUN    apt install -y mariadb-server

RUN    mysql_secure_installation



CMD ["sh", "config.sh"]