<?php

class ComOpenHouseControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{
	
	public function getCommands()
	{
		$name = $this->getController()->getIdentifier()->name;
		
		$this->addCommand('Dashboard', array(
			'href'		=> 'index.php?option=com_openhouse&view=dashboard',
			'active'	=> ($name == 'dashboard')
		));
		
		$this->addCommand('Listings', array(
			'href'		=> 'index.php?option=com_openhouse&view=listings',
			'active'	=> ($name == 'listing')
		));
		
		$this->addCommand('Agents', array(
			'href'		=> 'index.php?option=com_openhouse&view=agents',
			'active'	=> ($name == 'agent')
		));
		
		$this->addCommand('Locations', array(
			'href'		=> 'index.php?option=com_openhouse&view=locations',
			'active'	=> ($name == 'location')
		));
		
		return parent::getCommands();
	}
}