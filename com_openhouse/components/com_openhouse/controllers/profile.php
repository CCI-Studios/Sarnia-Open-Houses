<?php

class ComOpenhouseControllerProfile extends ComDefaultControllerDefault
{
	
	
	public function _actionRead(KCommandContext $context)
	{
		$user = JFactory::getUser();
		
		$profile = $this->getModel()
					->set('created_by', $user->id)
					->getItem();
		
		if ($profile->isNew()) {
			$profile->created_by = $user->id;
			$profile->save();
		}
		
		return $profile;
	}
	
	
}