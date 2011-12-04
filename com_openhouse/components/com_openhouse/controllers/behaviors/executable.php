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
				return $user->authorize('core.create', 'com_openhouse');
			// image
			// profile
			case 'showing':
				return $user->authorize('core.create', 'com_openhouse'); // FIXME any agent can create a listing for any house
			case 'waypoint':
				return true;
			default:
				return $user->authorize('core.create', 'com_openhouse');
		}
	}
	
	public function canEdit()
	{
		$name = $this->getMixer()->getIdentifier()->name;
		$item = $this->getMixer()->getModel()->getItem();
		$user = JFactory::getUser();
		
		
		switch($name) {
			case 'agent':
				return ($user->id === $item->user_id) && $user->authorize('core.edit', 'com_openhouse');
			case 'house':
				return ($user->id === $item->created_by) && $user->authorize('core.edit', 'com_openhouse');
			// image
			// profile
			case 'showing':
				return false;
			case 'waypoint':
				return false;
			default:
				return $user->authorize('core.edit', 'com_openhouse');
		}
	}
	
	public function canDelete()
	{
		$name = $this->getMixer()->getIdentifier()->name;
		$item = $this->getMixer()->getModel()->getItem();
		$user = JFactory::getUser();
		
		switch ($name) {
			case 'showing':
				return ($user->id === $item->house->created_by);
			case 'waypoint':
				return ($user->id === $item->created_by) && $user->authorize('core.delete', 'com_openhouse');
			default:
				return parent::canDelete();
		}
	}
}