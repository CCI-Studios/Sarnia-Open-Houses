<?php

class ComOpenhouseDatabaseRowAgent extends ComOpenhouseDatabaseRowRelated
{
	public function __construct(KConfig $config = null)
	{
		parent::__construct($config);

		$this->has_many('houses');
	}
}