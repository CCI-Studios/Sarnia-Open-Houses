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
		$this->updateHouse($data);
		return $data;
	}
	
	
	protected function updateHouse($showing)
	{
		$house = $showing->house;
		$table = $showing->getTable();
		$query = $table->getDatabase()->getQuery();
		
		$query->select('MIN(start_date) AS start_date');
		$query->where('openhouse_house_id', '=', $house->id);
		$query->where('start_date', '>=', date('Y-m-d', strtotime('-1 day')));
		
		$value = $table->select($query, KDatabase::FETCH_FIELD);
		$house->upcoming = $value;
		$house->save();
	}
}