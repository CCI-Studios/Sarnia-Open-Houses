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
}