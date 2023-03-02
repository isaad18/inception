FROM debian:latest

RUN    apt update && apt upgrade -y

RUN    apt install -y mariadb-server

RUN    mysql_secure_installation

# ENTRYPOINT ["sh", "config.sh"]