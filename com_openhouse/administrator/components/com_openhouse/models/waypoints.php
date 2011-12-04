<?php

class ComOpenhouseModelWaypoints extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('openhouse_house_id', 'int');
		
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		$user = JFactory::getUser();
		
		$query->where('created_by', '=', $user->id);
		
		if (is_numeric($state->openhouse_house_id)) {
			$query->where('openhouse_house_id', '=', $state->openhouse_house_id);
		}
		
		parent::_buildQueryWhere($query);
	}
}