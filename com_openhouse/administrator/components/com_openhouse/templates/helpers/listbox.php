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
			//'attribs'	=> array('id'=>$config->name),
		));
		
		return parent::_listbox($config);
	}
	
	public function offices($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'offices',
			'name'		=> 'openhouse_office_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'prompt'		=> '- Select Office -',
			//'attribs'	=> array('id'=>$config->name),
		));
		
		return parent::_listbox($config);
	}
	
	public function companies($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'companies',
			'name'		=> 'openhouse_company_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'prompt'		=> '- Select Company -',
			//'attribs'	=> array('id'=>$config->name),
		));
		
		return parent::_listbox($config);
	}
	
}
