<?php

class ComOpenhouseControllerToolbarDashboard extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		// Options button.
		if (JFactory::getUser()->authorise('core.admin', 'com_foobar')) {
			$this->addCommand('modal', array(
				'href'		=> 'index.php?option=com_config&view=component&component=com_openhouse&path=&tmpl=component',
				'width'		=> 875,
				'height'	=> 550,
				'icon'		=> 'icon-32-options',
				'label'		=> 'Options'
			));
		}
		
		return parent::getCommands();
	}
	
}