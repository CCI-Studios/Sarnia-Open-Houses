<?php

class ComOpenhouseControllerAgent extends ComDefaultControllerDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->registerCallback('before.read', array($this, 'checkValid'));
		
		$this->_view = "agent";	// There is no agents listings
	}
	
	public function checkValid(KCommandContext $context)
	{
		$data = $context->data;
		
		
		
		KFactory::get('lib.joomla.application')->enqueueMessage('adf', 'infoasdf');
		
	}
	
}