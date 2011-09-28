<?php

class ComOpenHouseViewHouseHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$agent = KFactory::tmp('admin::com.openhouse.model.agents')->getMe();
		$this->assign('agent', $agent);
		
		return parent::display();
	}
	
}