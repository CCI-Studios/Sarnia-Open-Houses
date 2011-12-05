<?php

class ComOpenhouseViewProfileHtml extends ComOpenhouseViewHtml
{
	
	public function display()
	{
		$this->assign('user', JFactory::getUser());
		
		return parent::display();
	}
	
}