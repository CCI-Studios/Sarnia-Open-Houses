<?php

class ComOpenhouseControllerShowing extends ComDefaultControllerDefault
{

	protected function _actionRead(KCommandContext $context)
	{
		$data = parent::_actionRead($context);

		if ($data->isNew()) {
			$data->openhouse_house_id = KRequest::get('get.openhouse_house_id', 'int', null);
		}

		return $data;
	}

	protected function _actionAdd(KCommandContext $context)
	{
		$data = parent::_actionAdd($context);
		$this->setRedirect(JRoute::_('index.php?option=com_openhouse&view=house&id='. $data->openhouse_house_id));
		return $data;
	}
}