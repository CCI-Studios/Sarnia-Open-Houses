<?php

class ComOpenHouseControllerDashboard extends ComDefaultControllerResource
{
	
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'request'	=> array('layout' => 'default')
		));
		
		parent::_initialize($config);
	}
	
}