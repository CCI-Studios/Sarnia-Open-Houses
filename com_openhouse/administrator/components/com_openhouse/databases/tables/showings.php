<?php

class ComOpenhouseDatabaseTableShowings extends KDatabaseTableDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->registerCallback(array('after.insert', 'after.update', 'after.delete'), array($this, 'updateUpcoming'));
	}
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'enable_callbacks'	=> true
		));
		
		parent::_initialize($config);
	}
	
	public function updateUpcoming(KCommandContext $context)
	{
		$showing = $context->data;
		$house = $showing->house;
		$table = $showing->getTable();
		$query = $table->getDatabase()->getQuery();
		
		$query->select('MIN(start_date) AS min');
		$query->where('openhouse_house_id', '=', $house->id);
		$query->where('start_date', '>=', date('Y-m-d'));
		$query->limit(1);
		
		$row = $table->select($query, KDatabase::FETCH_ROW);
		$house->upcoming = $row->min;
		$house->save();

		return true;
	}
	
}