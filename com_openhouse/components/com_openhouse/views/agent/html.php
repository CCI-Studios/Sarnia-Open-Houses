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
	
	protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'template_filters' => array('module'),
        ));

        parent::_initialize($config);
	}
	
	/**
         * Setup variables for viewing a single agent.
         */
	private function viewAgent() {
		$app = JFactory::getApplication();
		$agent = $this->getModel()->getItem();

		$agent->isOwnable();

		$valid = $this->getModel()->isValid() === true;
		$this->assign('valid', $valid);

		if (!$valid && $agent->canEdit()) {
		    $url = JRoute::_('index.php?option=com_openhouse&view=agent&layout=form&id='. $agent->id);
		    $app->enqueueMessage('Your profile is incomplete. Please <a href="'. $url .'">update your profile</a>.', 'notice');
		}
	}
}
