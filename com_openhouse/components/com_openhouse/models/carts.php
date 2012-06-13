<?php

class ComOpenhouseModelCarts extends KModelAbstract
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->insert('houseID', 'int');
	}

	public function getList()
	{
		if (!$this->_list) {
			$this->_list = array('asdf', 'rqr', 'adsf');
			$this->_total = count($this->_list);
		}

		return $this->_list;
	}

	public function getItem()
	{
		if (!$this->_item) {
			$this->_item = "afdssjkhldf";
		}

		return $this->_item;
	}

}