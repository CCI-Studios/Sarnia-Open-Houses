<?php

class ComOpenhouseViewWaypointsHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$waypoints = $this->getModel()->getList();
		
		return parent::display();
	}
	
}