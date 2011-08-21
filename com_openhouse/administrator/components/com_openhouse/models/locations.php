<?php

class ComOpenHouseModelLocations extends ComDefaultModelDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->remove('sort')
			->insert('sort', 'cmd', 'title');
	}
	
	
}