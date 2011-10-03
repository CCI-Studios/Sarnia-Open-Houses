<?php

class ComOpenHouseViewHouseHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$house = $this->getModel()->getItem();
		
		$agent = KFactory::tmp('admin::com.openhouse.model.agents')->getMe();
		$this->assign('agent', $agent);
		
		$images = KFactory::tmp('site::com.openhouse.model.images')
					->set('house_id', $house->id)
					->getList();
		$this->assign('images', $images);
		
		return parent::display();
	}
	
}