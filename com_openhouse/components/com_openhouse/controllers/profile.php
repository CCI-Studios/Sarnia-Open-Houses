<?php

class ComOpenhouseControllerProfile extends ComDefaultControllerDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->registerCallback('before.read', array($this, 'redirectProfile'));
	}

	public function redirectProfile(KCommandContext $context)
	{
		if (is_numeric(KRequest::get('get.id', 'int')) || 
			is_numeric(KRequest::get('get.user_id', 'int'))) {
			return;
		}

		$app = JFactory::getApplication();
		$user = JFactory::getUser();
		$profile = $this->getService('com://site/openhouse.model.profiles')
						->set('created_by', $user->id)
						->getItem();

		if ($profile) {
			$app->redirect('index.php?option=com_openhouse&view=profile&id='. $profile->id);
		} else {
			$app->redirect('index.php', 'Profile not found.');
		}
	}
	
	
}