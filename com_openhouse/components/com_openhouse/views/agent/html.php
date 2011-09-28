<?php

class ComOpenhouseViewAgentHtml extends ComDefaultViewHtml
{
	
	
	public function display()
	{
		
		switch ($this->getLayout()) {
			case 'form':
				break;
			case 'default':
			default:
				$this->viewAgent();
		}
		
		return parent::display();
	}
	
	
	private function viewAgent() {
		$app = JFactory::getApplication();
		$agent = $this->getModel()->getItem();
		
		$agent->isOwnable();
		
		if ($this->getModel()->isValid() !== true && $agent->canEdit()) {
			$url = JRoute::_('index.php?option=com_openhouse&view=agent&layout=form&id='. $agent->id);
			$app->enqueueMessage('Your profile is incomplete. Please <a href="'. $url .'">update your profile</a>.', 'notice');
		}
		
		$listings = "ADSf"; // TODO update this
		$this->assign('listings', $listings);
	}
}