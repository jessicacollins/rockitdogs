use rockitdogs;

/* Add User */
INSERT INTO `user` (`user_id`, `address_id`, `image_id`, `username`, `email`, `password`, `first_name`, `last_name`, `datetime_added`) VALUES ('1', '1', NULL, 'Amy', 'amy@rockitdogs.com', '1234', 'Amy', 'Smith', NOW());
INSERT INTO `user` (`user_id`, `address_id`, `image_id`, `username`, `email`, `password`, `first_name`, `last_name`, `datetime_added`) VALUES ('2', '2', NULL, 'Luke', 'luke@rockitdogs.com', '1234', 'Luke', 'Davis', NOW());



/*Add Test Addresses */
INSERT INTO `address` (`address_id`, `address1`, `address2`, `city`, `state`, `zip`) VALUES ('1', '2343 South Port St.', NULL, 'Scottsdale', 'AZ', '85308');
INSERT INTO `address` (`address_id`, `address1`, `address2`, `city`, `state`, `zip`) VALUES ('2', '4562 W. Shore Ln.', NULL, 'Tempe', 'AZ', '85932');
INSERT INTO `address` (`address_id`, `address1`, `address2`, `city`, `state`, `zip`) VALUES ('3', '3452 E. University Dr.', NULL, 'Tempe', 'AZ', '85344');
INSERT INTO `address` (`address_id`, `address1`, `address2`, `city`, `state`, `zip`) VALUES ('4', '3253 W. Southern Ave', NULL, 'Phoenix', 'AZ', '84033');


/*Add Dog */

INSERT INTO `dog` (`dog_id`, `user_id`, `name`, `tagline`, `birthday`, `breed`, `gender`, `weight`, `temperament`, `license_id`, `datetime_added`) VALUES ('1', '1', 'Barney', 'I rock!', '2014-02-22', 'Bloodhound', 'male', '30', 'lazy', '34223', NOW());
INSERT INTO `dog` (`dog_id`, `user_id`, `name`, `tagline`, `birthday`, `breed`, `gender`, `weight`, `temperament`, `license_id`, `datetime_added`) VALUES ('2', '2', 'Lucy', 'Sweetest', '2013-06-12', 'Golden Retriever', 'female', '70', 'Gentle', '3534534', NOW());

/* Add Vet */
INSERT INTO `vet` (`vet_id`, `dog_id`, `address_id`, `first_name`, `last_name`, `phone`, `business_name`, `datetime_added`) VALUES ('1', '1', '3', 'John', 'Jacobs', '555-555-5555', 'Super Vet', NOW());
INSERT INTO `vet` (`vet_id`, `dog_id`, `address_id`, `first_name`, `last_name`, `phone`, `business_name`, `datetime_added`) VALUES ('2', '2', '4', 'Jane', 'Jackson', '555-563-2352', 'Gentle Care', NOW());

/* Add Comment */
INSERT INTO `image_comment` (`image_comment_id`, `image_id`, `user_id`, `comment`) VALUES ('1', '1', '2', 'So freakin adorable');
INSERT INTO `image_comment` (`image_comment_id`, `image_id`, `user_id`, `comment`) VALUES ('2', '2', '1', 'Oh my goodness!');



