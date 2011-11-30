<?php

class ComOpenhouseDatabaseRowWaypoint extends ComOpenhouseDatabaseRowRelated
{

	public function __construct(KConfig $config = null)
	{
		parent::__construct($config);

		$this->has_one('house');
	}
}