<?php

class ComOpenhouseControllerAgent extends ComDefaultControllerDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->registerCallback('before.read', array($this, 'redirectProfile'));
	}
	
	/**
	 * There is not option to view and 'agents' style listing page.
	 */
	public function getView()
	{
		$this->_view = "agent";
		return parent::getView();
	}
	
	public function redirectProfile(KCommandContext $context)
	{
		if (is_numeric(KRequest::get('get.id', 'int'))) {
			return;
		}
		
		$app = JFactory::getApplication();
		$self = KFactory::get('site::com.openhouse.model.agents')->getMe();
		
		if ($self) {
			$app->redirect('index.php?option=com_openhouse&view=agent&id='. $self->id);
		} else {
			$app->redirect('index.php', 'Agent not found.');
		}
		
	}
	
}