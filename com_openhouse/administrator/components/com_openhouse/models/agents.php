<?php

class ComOpenhouseModelAgents extends ComDefaultModelDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('user_id', 'int');
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		
		if (is_numeric($state->user_id)) {
			$query->where('user_id', '=', $state->user_id);
		}
		
		parent::_buildQueryWhere($query);
	}
	
	public function getMe()
	{
		$user = KFactory::get('lib.joomla.user');
		
		if ($user->guest) {
			return null;
		}
		
		$model = KFactory::get($this->getIdentifier());
		$list = $model->set('user_id', $user->id)->getList();
		
		if (!count($list)) {
			return null;
		}
		
		return $list->top();
		
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
		
		if (!$item->phone) {
			$errors[] = JText::_("You need to have a phone number listed.");
		}
		
		if (!$item->openhouse_office_id) {
			$errors[] = JText::_("You must specify your office.");
		}
		
		if (!$item->openhouse_company_id) {
			$errors[] = JText::_("You must select the your company.");
		}
	
		return (count($errors))? $errors : true;
	}
	
}