<?php

class ComOpenHouseViewDashboardHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		KRequest::set('get.hidemainmenu', 0);
		
		return parent::display();
	}
	
}