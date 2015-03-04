
CREATE TABLE  `user` (
`user_id` INT( 11 ) NOT NULL ,
 `address_id` INT( 11 ) NOT NULL ,
 `image_id` INT( 11 ) NOT NULL ,
 `username` VARCHAR( 50 ) NOT NULL ,
 `email` VARCHAR( 100 ) NOT NULL ,
 `password` CHAR( 64 ) NOT NULL ,
 `first_name` VARCHAR( 20 ) NOT NULL ,
 `last_name` VARCHAR( 20 ) NOT NULL ,
 `datetime_added` DATETIME NOT NULL ,
PRIMARY KEY (  `user_id` ) ,
KEY  `address_id` (  `address_id` ,  `image_id` )
)






CREATE TABLE  `dog` (
`dog_id` INT( 11 ) NOT NULL ,
 `user_id` INT( 11 ) NOT NULL ,
 `name` VARCHAR( 100 ) NOT NULL ,
 `tagline` VARCHAR( 255 ) NOT NULL ,
 `birthday` DATETIME NOT NULL ,
 `breed` VARCHAR( 64 ) NOT NULL ,
 `gender` VARCHAR( 20 ) NOT NULL ,
 `weight ` VARCHAR( 20 ) NOT NULL ,
 `temperament` VARCHAR(255) NOT NULL ,
 `license_id` VARCHAR(255) NOT NULL ,
 `datetime_added` DATETIME NOT NULL ,
PRIMARY KEY (  `dog_id` ) ,
KEY  (`user_id')









CREATE TABLE  `vet` (
`vet_id` INT() NOT NULL ,
 `dog_id` INT() NOT NULL ,
 `address_id` INT() NOT NULL ,
 `first_name` VARCHAR( 255 ) NOT NULL ,
 `last_name` VARCHAR( 255 ) NOT NULL ,
 `phone` VARCHAR() NOT NULL ,
 `business_name` VARCHAR( 255 ) NOT NULL ,
 `datetime_added` DATETIME NOT NULL ,
PRIMARY KEY (  `vet_id` ) ,
KEY  (  `dog_id` ,  `address_id` )




CREATE TABLE  `image_comment` (
`image_comment_id` INT() NOT NULL ,
 `image_id` INT() NOT NULL ,
 `user_id` INT() NOT NULL ,
 `comment` VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY (  `image_comment_id` ) ,
KEY (  `image_id` ,  `user_id` )




CREATE TABLE  `image` (
 `image_id` INT() NOT NULL ,
 `url` VARCHAR(255) NOT NULL ,
 `title` VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY (  `image_id` ) 





CREATE TABLE  `dog_image` (
 `image_id` INT() NOT NULL ,
 `dog_id` INT() NOT NULL ,
 `primary_image` TINYINT(1) NOT NULL ,
PRIMARY KEY (  `image_id` ) ,
KEY ( `dog_id`) 






CREATE TABLE  `love` (
 `user_id` INT() NOT NULL ,
 `image_id` VARCHAR(255) NOT NULL ,
PRIMARY KEY (  `image_id`, `image_id` )





CREATE TABLE  `address` (
 `address_id` INT() NOT NULL ,
 `address1` VARCHAR(255) NOT NULL ,
 `address2` VARCHAR(255) NOT NULL ,
 `city` VARCHAR( 255 ) NOT NULL ,
 `state` VARCHAR( 255 ) NOT NULL ,
 `zip` INT() NOT NULL ,
PRIMARY KEY (  `address_id` ) 

















