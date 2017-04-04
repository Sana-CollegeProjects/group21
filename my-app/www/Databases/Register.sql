/*
Creating Database for sign-up
Register Table Structure for users
Created By: Charles Banda
Created on: 31-03-2017
*/


CREATE TABLE Register(
UserID INT(25) NOT NULL, PRIMARY KEY,
UserName VARCHAR(225) NOT NULL,
Email VARCHAR(225) NOT NULL, 
Password VARCHAR(50) NOT NULL, 
Password2 VARCHAR(50) NOT NULL
);

