FROM debian:buster

ARG MYSQL_ROOT_PASSWORD

RUN apt-get update && apt-get install -y mariadb-server

COPY tools/req.sql /req.sql
RUN sed -i "s/127.0.0.1/0.0.0.0/" /etc/mysql/mariadb.conf.d/50-server.cnf
RUN sed -i "s/MYSQL_ROOT_PASSWORD/$MYSQL_ROOT_PASSWORD/" /req.sql

RUN service mysql start && mysql -u root < /req.sql && rm /req.sql

CMD mysqld_safe
