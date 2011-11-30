<?php

class ComOpenHouseDatabaseRowHouse extends ComOpenhouseDatabaseRowRelated
{

	public function __construct(KConfig $config = null)
	{
		parent::__construct($config);

		$this->has_many('showings');
		$this->has_many('images');
	}

	public function getPrice()
	{
		if ($this->price) {
			return '$'. number_format($this->price, 0, '', ',');
		}
	}

	public function getFullLocation()
	{
		if ($this->city && $this->province) {
			return $this->city .', '. $this->province;
		} else {
			return $this->city.$this->province;
		}
	}
}