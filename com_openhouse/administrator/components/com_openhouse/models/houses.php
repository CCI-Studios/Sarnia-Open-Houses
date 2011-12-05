<?php

class ComOpenHouseModelHouses extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('openhouse_agent_id', 'int')
			->insert('enabled', 'bool')
			->insert('past', 'bool')
			->insert('min_price', 'int')
			->insert('max_price', 'int')
			->insert('city', 'string')
			->insert('province', 'string')
			->insert('created_after', 'datetime')
			->remove('sort')->insert('sort', 'cmd', 'created_on');
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		
		if (is_numeric($state->openhouse_agent_id)) {
			$query->where('created_by', '=', $state->openhouse_agent_id);
		}
		
		if (is_numeric($state->enabled)) {
			$query->where('enabled', '=', $state->enabled);
		}
		
		if (is_numeric($state->past) && $state->past == 1) {
			$query->where('upcoming', '>=', date('Y-m-d'));
		}
		
		if (is_numeric($state->min_price)) {
			$query->where('price', '>=', $state->min_price);
		}
		
		if (is_numeric($state->max_price)) {
			$query->where('price', '<=', $state->max_price);
		}
		
		if ($state->city) {
			$query->where('city', '=', $state->city);
		}
		
		if ($state->province) {
			$query->where('province', '=', $state->province);
		}
		
		if ($state->created_after) {
			$query->where('created_on', '>=', $state->created_after);
		}
		
		parent::_buildQueryWhere($query);
	}
	
}