<?php

class ComOpenHouseDatabaseRowHouse extends KDatabaseRowDefault
{
	public function getPrice()
	{
		if ($this->price) {
			return '$'. number_format($this->price, 0, '', ',');
		}
	}
	
	public function getLocation()
	{
		if ($this->city && $this->location) {
			return $this->city .', '. 'LOCATION'; // TODO Add locations
		} else {
			return $this->city.$this->location; // TODO Add locations
		}
	}
}