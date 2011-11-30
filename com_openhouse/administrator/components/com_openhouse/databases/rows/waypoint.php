<?php

class ComOpenhouseDatabaseRowWaypoint extends KDatabaseRowDefault
{
	protected $_house;
	
	public function getHouse() {
		if (!isset($this->_house)) {
			$this->_house = $this->getService('com://admin/openhouse.model.house')
								->id($this->openhouse_house_id)
								->getItem();
		}
		
		return $this->_house;
	}
	
}