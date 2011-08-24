CREATE TABLE IF NOT EXISTS `#__openhouse_agents` (
	`openhouse_agent_id` SERIAL,
	
	`name` VARCHAR(250) NOT NULL,
	# photo
	# office id
	# broker
	# logo id
	`phone` VARCHAR(20) NOT NULL DEFAULT '',
	`website` VARCHAR(250) NOT NULL DEFAULT '',
	`email` VARCHAR(250) NOT NULL DEFAULT ''
	
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__openhouse_locations` (
	`openhouse_location_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL
) ENGINE=MyISAM;

# company
	# name
	# number
	# logo
# office

