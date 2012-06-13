<?php

class ComOpenhouseControllerHouse extends ComDefaultControllerDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->registerCallback('after.add', array($this, 'saveRedirect'));
		$this->registerCallback('after.edit', array($this, 'saveRedirect'));
		$this->registerCallback('after.delete', array($this, 'agentPage'));
	}
	
	public function saveRedirect(KCommandContext $context)
	{
		JFactory::getApplication()->redirect('index.php?option=com_openhouse&view=house&id='. $context->result->id);
	}	

	public function agentPage(KCommandContext $context)
	{
		JFactory::getApplication()->redirect('/my-open-houses');
	}
}