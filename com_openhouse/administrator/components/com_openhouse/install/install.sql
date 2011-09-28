CREATE TABLE IF NOT EXISTS `#__openhouse_agents` (
	`openhouse_agent_id` SERIAL,
	
	`name` VARCHAR(250) NOT NULL,
	`title` VARCHAR(250) NOT NULL,
	`phone` VARCHAR(20) NOT NULL DEFAULT '',
	`website` VARCHAR(250) NOT NULL DEFAULT '',
	`email` VARCHAR(250) NOT NULL DEFAULT '',
	
	`office_id` BIGINT(20) NOT NULL,
	`company_id` BIGINT(20) NOT NULL,
	`user_id` INT(11) NOT NULL,
	
	UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_locations` (
	`openhouse_location_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_companies` (
	`openhouse_company_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_offices` (
	`openhouse_office_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_listings` (
	`openhouse_listing_id` SERIAL,
	
	`price` VARCHAR(15) NOT NULL,
	`bedrooms` VARCHAR(10) NOT NULL,
	`bathrooms` VARCHAR(10) NOT NULL,
	`address` VARCHAR(30) NOT NULL,
	`city` VARCHAR(20) NOT NULL,
	`postal` VARCHAR(20) NOT NULL,
	`description` VARCHAR(500) NOT NULL,
	`enabled` TINYINT(1) NOT NULL DEFAULT '0'
	
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_images` (
	`openhouse_image_id` SERIAL,
	
	`filename` VARCHAR(250) NOT NULL,
	`title` VARCHAR(200) NOT NULL,
	`enabled` TINYINT(1) NOT NULL DEFAULT '0',
	
	`ordering` TINYINT(3) NOT NULL DEFAULT '0',
	`openhouse_listing_id` BIGINT(20) UNSIGNED NOT NULL
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_showings` (
	`openhouse_showing_id` SERIAL,
	
	`start_date` DATE NOT NULL,
	`end_date` DATE NOT NULL,
	`hours` VARCHAR(50) NOT NULL,
	
	`openhouse_listing_id` BIGINT(20) UNSIGNED NOT NULL
) ENGINE=MyISAM;