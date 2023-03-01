FROM mariadb:10.3.22

RUN    apt update && apt upgrade -y

RUN    apt install mariadb-server

RUN    enable mariadb

ENTRYPOINT ["sh", "config.sh"]