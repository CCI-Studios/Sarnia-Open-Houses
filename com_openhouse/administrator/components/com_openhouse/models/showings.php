<?php

class ComOpenHouseModelShowings extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->insert('openhouse_house_id', 'int')
			->insert('future_only', 'boolean', true)
			->remove('sort')->insert('sort', 'cmd', 'start_date');
	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if (is_numeric($state->openhouse_house_id)) {
			$query->where('openhouse_house_id', '=', $state->openhouse_house_id);
		}
		
		if ($state->future_only) {
			$query->where('start_date', '>=', date('Y:m:d'));
		}

		parent::_buildQueryWhere($query);
	}

}