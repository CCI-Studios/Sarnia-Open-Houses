<?php

class ComOpenHouseDatabaseTableImages extends KDatabaseTableDefault
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);
	}

	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'behaviors'	=> array('orderable')
		));

		parent::_initialize($config);
	}

}