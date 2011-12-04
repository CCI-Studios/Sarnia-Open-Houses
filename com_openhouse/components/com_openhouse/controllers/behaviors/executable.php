<?php

class ComOpenHouseControllerBehaviorExecutable extends ComDefaultControllerBehaviorExecutable
{

	
	
	public function canAdd() {
		$name = $this->getMixer()->getIdentifier()->name;
		$item = $this->getMixer()->getModel()->getItem();
		$user = JFactory::getUser();
		
		switch($name) {
			case 'agent':
				return false;
			case 'house':
				return parent::canAdd();
			// image
			// profile
			case 'showing':
				return parent::canAdd(); // FIXME any agent can create a listing for any house
			case 'waypoint':
				return true;
			default:
				return parent::canAdd();
		}
	}
	
	public function canEdit()
	{
		$name = $this->getMixer()->getIdentifier()->name;
		$item = $this->getMixer()->getModel()->getItem();
		$user = JFactory::getUser();
		
		
		switch($name) {
			case 'agent':
				return ($user->id === $item->user_id) && parent::canEdit();
			case 'house':
				return ($user->id === $item->created_by) && parent::canEdit();
			// image
			// profile
			case 'showing':
				return false;
			case 'waypoint':
				return false;
			default:
				return parent::canEdit();
		}
	}
}