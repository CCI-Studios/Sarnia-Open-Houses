<?php

class ComOpenhouseControllerToolbarImages extends ComDefaultControllerToolbarDefault
{

	public function getCommands()
	{
		$this->addCommand('resize');
		return parent::getCommands();
	}

	protected function _commandResize(KControllerToolbarCommand $command)
	{
		$command->append(array(
			'attribs'	=> array(
			         	'data-action'    	=> 'resize',
			         	'data-novalidate'	=> 'novalidate'
			)
		));

		$command->label = 'Resize Images';
		$command->icon = 'icon-32-refresh';
	}
}