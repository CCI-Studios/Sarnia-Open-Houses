<?php

class ComOpenHouseDatabaseTableHouses extends KDatabaseTableDefault
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'behaviors'	=> array('creatable', 'ownable'),
			'filters'	=> array(
				'price'	=> array('digit'),
			),
		));
		
		parent::_initialize($config);
	}
	
}