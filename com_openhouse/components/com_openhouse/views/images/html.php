<?php

class ComOpenHouseViewImagesHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$this->assign('price', $this->getModel()->getState()->get('price'));
		
		return parent::display();
	}
}