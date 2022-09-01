CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'inception' IDENTIFIED BY 'inception';
GRANT ALL ON wordpress.* TO 'inception'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'MYSQL_ROOT_PASSWORD';
