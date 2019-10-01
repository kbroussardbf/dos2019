#!/bin/bash

service apache2 start
service mysql start
mysql -uroot <<MYSQL_SCRIPT
CREATE DATABASE dos2019;
CREATE USER 'test'@'localhost' IDENTIFIED BY 'pass';
GRANT ALL PRIVILEGES ON *.* TO 'test'@'localhost';
FLUSH PRIVILEGES;
USE dos2019;
CREATE TABLE Users (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, uname VARCHAR(30) NOT NULL, pwd VARCHAR(60) NOT NULL, fname VARCHAR(30), lname VARCHAR(30), email VARCHAR(50), question VARCHAR(300) NOT NULL, answer VARCHAR(300) NOT NULL);
CREATE TABLE Products (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, prod_name VARCHAR(30) NOT NULL, prod_id INT(8) NOT NULL, description VARCHAR(400), price VARCHAR(10));
INSERT INTO Users (uname, pwd, fname, lname, email, question, answer) VALUES ('admin', 'Passw0rd!', 'admin', 'admin', 'admin@lazysusan.com', 'What is your favorite snack food?', 'Twizzlers');
INSERT INTO Users (uname, pwd, fname, lname, email, question, answer) VALUES ('test', 'test!', 'test', 'test', 'test@lazysusan.com', 'What is your favorite snack food?', 'donuts');
INSERT INTO Users (uname, pwd, fname, lname, email, question, answer) VALUES ('deb1234', 'asdfasdf1234!@#$!', 'Debbie', 'Munchkin', 'deb1234@lazysusan.com', 'What is your favorite snack food?', 'Kale salad');
INSERT INTO Products (prod_id, prod_name, price, description) VALUES ('1052001', '100pk #2 pencils', '3.99', 'Finest quality #2 pencils. Comes in a pack of 100 unsharpened yellow pencils.');
INSERT INTO Products (prod_id, prod_name, price, description) VALUES ('1052002', '10pl Steno notebooks', '12.99', 'Green lined steno notebooks, pack of 10.');
INSERT INTO Products (prod_id, prod_name, price, description) VALUES ('1052003', 'Alphabet flash cards', '15.25', 'Alphabet flash cards. Each card has a letter on one side and an image on the other. 26 cards.');
INSERT INTO Products (prod_id, prod_name, price, description) VALUES ('1052004', 'Post-It notes, large', '3.98', 'Pack of large yellow Post-It Notes. Contains 150 notes.');
INSERT INTO Products (prod_id, prod_name, price, description) VALUES ('1052005', 'Post-It notes, small', '2.98', 'Pack of small pink Post-It Notes. Contains 150 notes.');
INSERT INTO Products (prod_id, prod_name, price, description) VALUES ('1052006', 'Laptop stand', '67.88', 'Glass laptop stand with 4 USB ports (out) and audio jack (out). USB ports powered by laptop when connected. Adjustable height.');
INSERT INTO Products (prod_id, prod_name, price, description) VALUES ('1052007', '4ft USB', '17.50', '4ft USB cable, black');
INSERT INTO Products (prod_id, prod_name, price, description) VALUES ('1052008', 'Rollerball ink pens (20)', '7.50', '20-pack of rollerball ink pens');
exit;
MYSQL_SCRIPT

echo "Database configured"
echo "Application data ready"
echo "Open http://localhost/dos2019/ in your browser"
