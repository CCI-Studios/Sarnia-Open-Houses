<?php

class ComOpenHouseViewHouseHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$house = $this->getModel()->getItem();
		
		$agent = $this->getService('com://admin/openhouse.model.agents')->getMe();
		$this->assign('agent', $agent);
		
		return parent::display();
	}
	
}