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

# company
	# name
	# number
	# logo
# office

