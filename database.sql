
DROP DATABASE IF EXISTS rockitdogs;
CREATE DATABASE rockitdogs;
use rockitdogs;

CREATE TABLE  user (
 user_id INT AUTO_INCREMENT PRIMARY KEY,
 address_id INT( 11 ),
 image_id INT( 11 ),
 username VARCHAR( 50 ),
 email VARCHAR( 100 ),
 password CHAR( 64 ),
 first_name VARCHAR( 20 ),
 last_name VARCHAR( 20 ),
 remember_token VARCHAR(255),
 created_at DATETIME,
 updated_at DATETIME
);


CREATE TABLE  dog (
dog_id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT( 11 ),
 name VARCHAR( 100 ),
 tagline VARCHAR( 255 ),
 birthday DATE,
 breed VARCHAR( 64 ),
 gender VARCHAR( 20 ),
 weight VARCHAR( 20 ),
 temperament VARCHAR(255),
 license_id VARCHAR(255),
 datetime_added DATETIME
);


CREATE TABLE  vet (
vet_id INT AUTO_INCREMENT PRIMARY KEY,
 dog_id INT,
 address_id INT,
 first_name VARCHAR( 255 ),
 last_name VARCHAR( 255 ),
 phone VARCHAR(255),
 business_name VARCHAR( 255 ),
 datetime_added DATETIME
 );


CREATE TABLE  image_comment (
image_comment_id INT AUTO_INCREMENT PRIMARY KEY,
 image_id INT,
 user_id INT,
 comment VARCHAR( 255 )
);


CREATE TABLE  image (
 image_id INT AUTO_INCREMENT PRIMARY KEY,
 url VARCHAR(255),
 title VARCHAR( 255 )
 );


CREATE TABLE  dog_image (
 image_id INT AUTO_INCREMENT PRIMARY KEY,
 dog_id INT,
 primary_image TINYINT(1)
 );


CREATE TABLE  love (
 user_id INT NOT NULL,
 image_id VARCHAR(255) NOT NULL ,
PRIMARY KEY (  `user_id`, `image_id` )
);


CREATE TABLE  address (
 address_id INT AUTO_INCREMENT PRIMARY KEY,
 address1 VARCHAR(255),
 address2 VARCHAR(255),
 city VARCHAR( 255 ),
 state VARCHAR( 255 ),
 zip INT
 );













