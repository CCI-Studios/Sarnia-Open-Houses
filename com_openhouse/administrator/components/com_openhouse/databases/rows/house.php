<?php

class ComOpenHouseDatabaseRowHouse extends ComOpenhouseDatabaseRowRelated
{

	public function __construct(KConfig $config = null)
	{
		parent::__construct($config);

		$this->has_many('showings');
		$this->has_many('images');
		$this->belongs_to('agent', array(
			'foreign_key'	=> 'user_id',
			'local_key'		=> 'created_by'
		));
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
	
	public function getFullAddress()
	{
		$values = array_filter(array(
			$this->address,
			$this->city,
			$this->province,
			$this->postal), 'strlen');
		
		return implode(', ', $values);
	}
}