<?php

class ComOpenhouseDatabaseBehaviorOrderable extends KDatabaseBehaviorOrderable
{
	
	/**
	 * Override to add a custom WHERE clause
	 * 
	 * <code>	
	 * 	   $query->where('category_id', '=', $this->id); 
	 * </code>
	 *
	 * @param 	KDatabaseQuery $query
	 * @return  void
	 */
	public function _buildQueryWhere(KDatabaseQuery $query)
	{
		$name = $this->getMixer()->getIdentifier()->name;
		
		if ($name === 'image') {
			$query->where('openhouse_house_id', '=', $this->openhouse_house_id);
		}
		
		parent::_buildQueryWhere($query);
		
		echo $query;
	}
	
	
}