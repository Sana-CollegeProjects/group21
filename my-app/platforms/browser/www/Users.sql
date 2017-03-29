DROP DATABASE IF EXISTS Users;
CREATE DATABASE Users;
USE Users;

DROP TABLE IF EXISTS users;

CREATE TABLE users
(
userName VARCHAR(20),
userPass VARCHAR(20),
userEmail VARCHAR(40),
PRIMARY KEY (userName));

INSERT INTO users
(userName, userPass, userEmail)
VALUES
("shane1","12345678A","shanem4002@gmail.com");




