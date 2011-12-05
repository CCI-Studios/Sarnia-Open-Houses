<?php

class ComOpenHouseModelProfiles extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->insert('notifications', 'int');
	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if (is_numeric($state->notifications)) {
			$query->where('notifications', '=', $state->notifications);
		}

		parent::_buildQueryWhere($query);
	}

}