CREATE TABLE IF NOT EXISTS `#__openhouse_agents` (
	`openhouse_agent_id` SERIAL,

	`name` VARCHAR(250) NOT NULL,
	`title` VARCHAR(250) NOT NULL,
	`office_phone` VARCHAR(20) NOT NULL DEFAULT '',
	`cell_phone` VARCHAR(20) NOT NULL DEFAULT '',
	`email` VARCHAR(250) NOT NULL DEFAULT '',
	`picture` VARCHAR(250) NOT NULL DEFAULT '',

	`openhouse_company_id` BIGINT(20) NOT NULL,
	`user_id` INT(11) NOT NULL UNIQUE,

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

CREATE TABLE IF NOT EXISTS `#__openhouse_houses` (
	`openhouse_house_id` SERIAL,

	`price` INT(11) NOT NULL,
	`bedrooms` VARCHAR(10) NOT NULL,
	`bathrooms` VARCHAR(10) NOT NULL,
	`address` VARCHAR(30) NOT NULL,
	`city` VARCHAR(50) NOT NULL,
	`province` VARCHAR(40) NOT NULL,
	`virtual_link` VARCHAR(250) NOT NULL,
	`postal` VARCHAR(20) NOT NULL,
	`description` VARCHAR(400) NOT NULL,
	`enabled` TINYINT(1) NOT NULL DEFAULT '1',
	`next_showing` DATETIME DEFAULT '0000-00-00 00:00:00',

	`created_on` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by` INT(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_images` (
	`openhouse_image_id` SERIAL,

	`filename` VARCHAR(250) NOT NULL,
	`title` VARCHAR(200) NOT NULL,
	`enabled` TINYINT(1) NOT NULL DEFAULT '0',

	`ordering` INT(11) NOT NULL DEFAULT '0',
	`openhouse_house_id` BIGINT(20) UNSIGNED NOT NULL
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_showings` (
	`openhouse_showing_id` SERIAL,

	`start_date` DATE NOT NULL,
	`start_time` TIME NOT NULL,
	`end_time` TIME NOT NULL,

	`openhouse_house_id` BIGINT(20) UNSIGNED NOT NULL
) ENGINE=MyISAM;

CREATE TABLE `#__openhouse_waypoints` (
  `openhouse_waypoint_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` int(11) unsigned NOT NULL,
  `openhouse_house_id` bigint(20) unsigned NOT NULL,
  `ordering` int(11) unsigned NOT NULL,
  PRIMARY KEY (`openhouse_waypoint_id`)
) ENGINE=MyISAM;

CREATE TABLE `#__openhouse_profiles` (
	`openhouse_profile_id` SERIAL,
	
	`min_price` INT(11) UNSIGNED NOT NULL,
	`max_price` INT(11) UNSIGNED NOT NULL,
	`city`	VARCHAR(50) NOT NULL,
	`province` VARCHAR(40) NOT NULL,
	`notifications` TINYINT(1) NOT NULL DEFAULT '1',
	
	`created_by` INT(11) UNSIGNED NOT NULL,
	UNIQUE KEY `created_by` (`created_by`)
) ENGINE=MyISAM;