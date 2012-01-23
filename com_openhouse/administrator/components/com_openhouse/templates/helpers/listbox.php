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

	public function provinces($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'name'		=> 'province',
			'attribs'	=> array(),
			'selected'	=> null
		));

		$options = array();
		$options[] = $this->option(array('value' => 'Ontario', 'text' => 'Ontario'));
		$config->options = $options;

		return $this->optionlist($config);
	}
	
	public function agents($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'agents',
			'name'		=> 'openhouse_agent_id',
			'value'		=> 'user_id',
			'text'		=> 'name',
			'prompt'		=> '- filter Agent -',
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
	
	public function houseSorting($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'name'		=> 'sort',
			'attribs'	=> array(),
			'selected'	=> null,
		));
		
		$options = array();

		$options[] = $this->option(array('text' => 'Upcoming Open Houses', 'value' => 'upcoming'));
		$options[] = $this->option(array('text' => 'Recently Listed', 'value' => 'created_on'));
		
		$config->options = $options;
		return $this->optionlist($config);
	}

	public function repTitles($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'name'		=> 'title',
			'attribs'	=> array(),
			'selected'	=> null,
		));
		
		$options = array();

		$options[] = $this->option(array('text' => 'Sales Representative', 'value' => 'Sales Representative'));
		$options[] = $this->option(array('text' => 'Broker', 'value' => 'Broker'));
		
		$config->options = $options;
		return $this->optionlist($config);
	}
	
	public function timeselect($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'name'		=> 'time',
			'attribs'	=> array(),
			'selected'	=> '00:00:00'
		));

		$hour = strftime('%l', $config->selected);
		$min = strftime('%M', $config->selected);
		$period = strftime('%P', $config->selected);
		$html = '';
		
		// hours setup
		$hour_config = new KConfig(array(
			'name'		=> $config->name .'[hour]',
			'selected'	=> $hour,
			'attribs'	=> array('style' => 'width: auto;')
		));
		$options = array();
		for ($i = 1; $i < 13; $i++) {
			$options[] = $this->option(array('text' => $i, 'value' => $i));
		}
		$hour_config->options = $options;
		$html .= $this->optionlist($hour_config);
		$html .= ' ';

		// minutes setup
		$min_config = new KConfig(array(
			'name'		=> $config->name .'[min]',
			'selected' 	=> $hour,
			'attribs'	=> array('style' => 'width: auto;')
		));
		$options = array();
		$options[] = $this->option(array('text' => '00', 'value' => '00'));
		$options[] = $this->option(array('text' => '15', 'value' => '15'));
		$options[] = $this->option(array('text' => '30', 'value' => '30'));
		$options[] = $this->option(array('text' => '45', 'value' => '45'));

		$min_config->options = $options;
		$html .= $this->optionlist($min_config);
		$html .= " ";

		// period setup
		$period_config = new KConfig(array(
			'name'		=> $config->name .'[period]',
			'selected'	=> $hour,
			'attribs'	=> array('style' => 'width: auto;')
		));
		$options = array();
		$options[] = $this->option(array('text' => 'am', 'value' => 'am'));
		$options[] = $this->option(array('text' => 'pm', 'value' => 'pm'));

		$period_config->options = $options;
		$html .= $this->optionlist($period_config);
		
		return $html;
	}
}
