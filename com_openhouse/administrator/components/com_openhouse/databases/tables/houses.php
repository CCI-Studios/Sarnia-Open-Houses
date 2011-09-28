<?php

class ComOpenHouseDatabaseTableHouses extends KDatabaseTableDefault
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'behaviors'	=> array('creatable', 'ownable')
		));
		
		parent::_initialize($config);
	}
	
}