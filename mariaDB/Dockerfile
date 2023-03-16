FROM debian:buster

ARG    SQL_DB_NAME
ARG    SQL_USERNAME
ARG    SQL_PASSWORD
ARG    SQL_ROOT_PASSWORD
ARG    SQL_HOST

RUN    apt update && apt upgrade -y

RUN    apt install -y mariadb-server

COPY   ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/sql-setup.sh /tmp
RUN chmod +x /tmp/sql-setup.sh

RUN service mysql start && /tmp/sql-setup.sh

EXPOSE 3306

CMD [ "mysqld_safe" ]