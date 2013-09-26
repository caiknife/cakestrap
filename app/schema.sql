
Welcome to CakePHP v2.3.10 Console
---------------------------------------------------------------
App : app
Path: d:\Apache Software Foundation\Apache2.2\htdocs\cakestrap\app\
---------------------------------------------------------------
Cake Schema Shell
---------------------------------------------------------------


DROP TABLE IF EXISTS `ckpage`.`code_contents`;
DROP TABLE IF EXISTS `ckpage`.`codes`;


CREATE TABLE `ckpage`.`code_contents` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`content` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `ckpage`.`codes` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`content_id` int(10) DEFAULT NULL,
	`type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;


