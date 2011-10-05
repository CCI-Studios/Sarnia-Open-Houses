<?php

/**
 * Customize dispatcher to use 'houses' as tne default view.
 */
class ComOpenHouseDispatcher extends ComDefaultDispatcher
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'controller'	=> 'houses'
		));
		
		
		parent::_initialize($config);
	}
}
