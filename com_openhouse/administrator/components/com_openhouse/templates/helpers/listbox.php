<?php

class ComOpenHouseTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
	
	public function locations($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'locations',
			'name'		=> 'openhouse_location_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'prompt'		=> '- Select Location -',
			'attribs'	=> array('id'=>$config->name),
		));
		
		return parent::_listbox($config);
	}
	
}