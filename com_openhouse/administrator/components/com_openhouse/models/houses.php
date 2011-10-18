<?php

class ComOpenHouseModelHouses extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('openhouse_agent_id', 'int')
			->remove('sort')->insert('sort', 'cmd', 'created_on');
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		
		if (is_numeric($state->openhouse_agent_id)) {
			$query->where('created_by', '=', $state->openhouse_agent_id);
		}
		
		parent::_buildQueryWhere($query);
	}
	
}