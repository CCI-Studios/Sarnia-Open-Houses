<?php

class ComOpenhouseModelWaypoints extends ComDefaultModelDefault
{
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		$user = JFactory::getUser();
		
		$query->where('created_by', '=', $user->id);
		
		parent::_buildQueryWhere($query);
	}
}