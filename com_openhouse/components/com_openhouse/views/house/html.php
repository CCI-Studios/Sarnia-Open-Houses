<?php

class ComOpenHouseViewHouseHtml extends ComDefaultViewHtml
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'template_filters' => array('module'),
        ));

        parent::_initialize($config);
	}
	
	public function display()
	{
		$house = $this->getModel()->getItem();
		
		$agent = $this->getService('com://admin/openhouse.model.agents')->getMe();
		$this->assign('agent', $agent);
		
		return parent::display();
	}
	
}