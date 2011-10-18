<?php

class ComOpenHouseModelShowings extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('house_id', 'int')
			->remove('sort')->insert('sort', 'cmd', 'start_date');
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		
		if (is_numeric($state->house_id)) {
			$query->where('openhouse_house_id', '=', $state->house_id);
		}
		
		parent::_buildQueryWhere($query);
	}
	
}