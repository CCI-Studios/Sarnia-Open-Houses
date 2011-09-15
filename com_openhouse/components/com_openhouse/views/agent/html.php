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
				$this->assign('valid', $this->getModel()->isValid() === true);
		}
		
		return parent::display();
	}
	
}