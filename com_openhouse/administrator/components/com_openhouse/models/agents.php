<?php

class ComOpenhouseModelAgents extends ComDefaultModelDefault
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->remove('sort')->insert('sort', 'cmd', 'name');
	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if (is_numeric($state->user_id)) {
			$query->where('user_id', '=', $state->user_id);
		}

		parent::_buildQueryWhere($query);
	}
	
	public function isValid()
	{
		$item = $this->getItem();

		$errors = array();

		if (!$item->name) {
			$errors[] = JText::_("Name cannot be blank");
		}

		if (!$item->title) {
			$errors[] = JText::_("Title cannot be blank.");
		}

		if (!$item->office_phone) {
			$errors[] = JText::_("You need to have an office phone number listed.");
		}

		if (!$item->openhouse_company_id) {
			$errors[] = JText::_("You must select the your company.");
		}

		return (count($errors))? $errors : true;
	}

}
