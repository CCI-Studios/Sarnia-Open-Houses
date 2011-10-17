<?php

class ComOpenHouseViewHouseHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$house = $this->getModel()->getItem();
		
		$agent = $this->getService('com://admin/openhouse.model.agents')->getMe();
		$this->assign('agent', $agent);
		
		$images = $this->getService('com://admin/openhouse.model.images')
					->set('house_id', $house->id)
					->getList();
		$this->assign('images', $images);
		
		return parent::display();
	}
	
}