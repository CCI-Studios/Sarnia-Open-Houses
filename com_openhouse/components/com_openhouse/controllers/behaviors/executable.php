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
				return $user->authorize('core.create', 'com_openhouse') === true;
			// image
			// profile
			case 'showing':
				return $user->authorize('core.create', 'com_openhouse') === true;
			case 'waypoint':
				return true;
			default:
				return $user->authorize('core.create', 'com_openhouse') === true;
		}
	}
	
	public function canEdit()
	{
		$name = $this->getMixer()->getIdentifier()->name;
		$item = $this->getMixer()->getModel()->getItem();
		$user = JFactory::getUser();
		
		
		switch($name) {
			case 'agent':
				return ($user->id === $item->user_id) && $user->authorize('core.edit', 'com_openhouse') === true;
			case 'house':
				return ($user->id === $item->created_by) && $user->authorize('core.edit', 'com_openhouse') === true;
			// image
			case 'profile':
				return ($user->id === $item->created_by);
			case 'showing':
				return false;
			case 'waypoint':
				return false;
			default:
				return $user->authorize('core.edit', 'com_openhouse') === true;
		}
	}
	
	public function canDelete()
	{
		$name = $this->getMixer()->getIdentifier()->name;
		$item = $this->getMixer()->getModel()->getItem();
		$user = JFactory::getUser();
		
		switch ($name) {
			case 'image':
				return ($user->id === $item->house->created_by);
			case 'showing':
				return ($user->id === $item->house->created_by);
			case 'waypoint':
				return ($user->id === $item->created_by);
			default:
				return parent::canDelete();
		}
	}
}