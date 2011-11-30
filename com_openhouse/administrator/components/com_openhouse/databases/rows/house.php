<?php

class ComOpenHouseDatabaseRowHouse extends KDatabaseRowDefault
{
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