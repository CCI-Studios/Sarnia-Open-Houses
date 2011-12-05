<?php

class ComOpenhouseViewImagesHtml extends ComOpenhouseViewHtml
{
	public function display()
	{
		$house = $this->getService('com://site/openhouse.model.houses')
					->set('id', KRequest::get('get.openhouse_house_id', 'int'))
					->getItem();
		$this->assign('house', $house); 
		
		return parent::display();
	} 
	
}