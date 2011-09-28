<?php

class ComOpenHouseDatabaseTableAgents extends KDatabaseTableDefault
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'behaviors' => array('ownable')
		));
		
		
		parent::_initialize($config);
	}
}