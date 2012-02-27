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

		$this->addCommand('House Listings', array(
			'href'		=> 'index.php?option=com_openhouse&view=houses',
			'active'	=> ($name == 'house')
		));

		$this->addCommand('Agents', array(
			'href'		=> 'index.php?option=com_openhouse&view=agents',
			'active'	=> ($name == 'agent')
		));

		$this->addCommand('Images', array(
			'href'  		=> 'index.php?option=com_openhouse&view=images',
			'active'	=> ($name == 'image')
		));

		$this->addCommand('Locations', array(
			'href'		=> 'index.php?option=com_openhouse&view=locations',
			'active'	=> ($name == 'location')
		));

		$this->addCommand('Companies', array(
			'href'		=> 'index.php?option=com_openhouse&view=companies',
			'active'	=> ($name == 'company')
		));

		$this->addCommand('Offices', array(
			'href'		=> 'index.php?option=com_openhouse&view=offices',
			'active'	=> ($name == 'office')
		));

		return parent::getCommands();
	}
}