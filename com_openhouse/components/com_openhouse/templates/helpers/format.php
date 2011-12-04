<?php

class ComOpenhouseTemplateHelperFormat extends KTemplateHelperDefault
{
	
	public function price($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'value'		=> null,
			'currency'	=> '$',
		));
		
		return $config->currency. number_format($config->value);
	}
	
	public function named_date($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'value'	=> time(),
		));
		
		return date('F j, Y', strtotime($config->value));
	}
}