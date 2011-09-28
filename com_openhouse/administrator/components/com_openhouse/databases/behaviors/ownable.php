<?php

class ComOpenhouseDatabaseBehaviorOwnable extends KDatabaseBehaviorAbstract
{
	protected $_field;
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_field = $config->field;
	}
	
	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'field'			=> 'user_id',
			'auto_mixin'	=> true,
		));
		
		parent::_initialize($config);
	}
	
	public function getMixableMethods(KObject $mixer = null)
	{
		$methods = array();
		
		if (isset($mixer->{$this->_field}) || isset($mixer->created_by)) {
			$methods = parent::getMixableMethods($mixer);
		}
		
		return $methods;
	}
	
	
	public function canEdit()
	{
		$user = JFactory::getUser();

		return ($user->id === $this->{$this->_field}) || ($user->id === $this->created_by);
	}
	
}
