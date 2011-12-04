<?php

class ComOpenhouseViewWaypointsHtml extends ComOpenhouseViewHtml
{
	
	public function display()
	{
		$waypoints = $this->getModel()->getList();
		
		return parent::display();
	}
	
}