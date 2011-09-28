<?php

class ComOpenhouseControllerHouse extends ComDefaultControllerDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->registerCallback('after.add', array($this, 'saveRedirect'));
		$this->registerCallback('after.edit', array($this, 'saveRedirect'));
	}
	
	public function saveRedirect(KCommandContext $context)
	{
		$app = JFactory::getApplication();
		$result = $context->result;
		
		$app->redirect('index.php?option=com_openhouse&view=house&id='. $result->id);
	}	
}