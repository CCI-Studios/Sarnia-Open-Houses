<?php

class ComOpenHouseControllerBehaviorExecutable extends ComDefaultControllerBehaviorExecutable
{

	public function canEdit()
	{
		$name = $this->getMixer()->getIdentifier()->name;
		$user = JFactory::getUser();
		
		if ($name === 'agent') {
			$item = $this->getMixer()->getModel()->getItem();
			return ($user->id == $item->user_id);
		}
		
		return parent::canEdit();
	}
	
	public function canAdd() {
		$name = $this->getMixer()->getIdentifier()->name;
		$user = JFactory::getUser();
		
		if ($name === 'waypoint') {
			return true;
		} elseif ($name === 'house') {
			
		}
		
		return parent::canAdd();
	}
}