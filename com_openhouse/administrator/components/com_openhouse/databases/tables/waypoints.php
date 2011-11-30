<?php

class ComOpenHouseDatabaseTableWaypoints extends KDatabaseTableDefault
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'behaviors'	=> array('creatable', 'orderable')
		));
		
		parent::_initialize($config);
	}
	
}