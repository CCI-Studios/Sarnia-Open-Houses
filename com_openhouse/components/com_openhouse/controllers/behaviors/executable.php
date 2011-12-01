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
		} elseif ($name === 'house') {
			$item = $this->getMixer()->getModel()->getItem();
			return ($user->id == $item->created_by);
		}
		
		return parent::canEdit();
	}
	
	public function canAdd() {
		$name = $this->getMixer()->getIdentifier()->name;
		$user = JFactory::getUser();
		$acl = JFactory::getAcl();
		
		if ($name === 'waypoint') {
			return true;
		} elseif ($name === 'house') {
			$groups = $acl->getGroupsByUser($user->id);
			if (in_array(9, $groups)) {
				return true;
			}
		}
		
		return parent::canAdd();
	}
}