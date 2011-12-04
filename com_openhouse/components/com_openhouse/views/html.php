<?php

class ComOpenhouseViewHtml extends ComDefaultViewHtml
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->getTemplate()->getFilter('alias')->append(array(
			'/@format\([\'"](.*?)[\'"],\s*(.*?)\)/' => '$this->renderHelper("format.$1", array("value" => $2))'
		), KTemplateFilter::MODE_READ, true);
	}
	
}