<?php

class ComOpenhouseDatabaseRowShowing extends ComOpenhouseDatabaseRowRelated
{

	public function __construct(KConfig $config = null)
	{
		parent::__construct($config);

		$this->belongs_to('house');
	}
}