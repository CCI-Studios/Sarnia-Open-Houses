<?php

class ComOpenHouseViewHousesHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$params  = JComponentHelper::getParams('com_openhouse');
		
		if (KRequest::get('get.min_price', 'int') || 
			KRequest::get('get.max_price', 'int') ||
			KRequest::get('get.openhouse_location_id', 'int') ||
			KRequest::get('get.min_baths', 'int') ||
			KRequest::get('get.min_bedrooms', 'int')) {
		
			$this->assign('searching', false);
		} else {
			$this->assign('searching', true);
		}
		
		echo parent::display();
	}
}