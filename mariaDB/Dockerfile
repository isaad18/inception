FROM debian:buster

RUN    apt update && apt upgrade -y

RUN    apt install -y mariadb-server

COPY   ./config/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./config/mydata.sql /docker-entrypoint-initdb.d/

COPY ./tools/start-mariadb.sh /usr/local/bin/start-mariadb.sh

RUN chmod +x /usr/local/bin/start-mariadb.sh

EXPOSE 3306

CMD [ "mysqld_safe" ]