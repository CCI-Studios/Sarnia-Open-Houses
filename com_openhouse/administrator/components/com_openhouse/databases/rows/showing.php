<?php

class ComOpenhouseDatabaseRowShowing extends ComOpenhouseDatabaseRowRelated
{

	public function __construct(KConfig $config = null)
	{
		parent::__construct($config);

		$this->belongs_to('house');
	}
	
	public function __set($column, $value)
	{
		if (($column == 'start_time' || $column == 'end_time') && is_array($value)) {			
			if ($value['period'] == 'pm') {
				$value['hour'] += 12;
			}
			$value = "{$value['hour']}:{$value['min']}:00";
		}

		parent::__set($column, $value);
	}
	
}