<?php

class ComOpenHouseDispatcher extends ComDefaultDispatcher
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'controller'	=> 'listings'
		));
		
		
		parent::_initialize($config);
	}
}