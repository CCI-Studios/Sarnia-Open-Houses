<?php

class ComOpenHouseViewHouseHtml extends ComOpenhouseViewHtml
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
		$this->assign('allow_waypoint', JFactory::getUser()->guest == 0);
		$waypoints = $this->getService('com://site/openhouse.model.waypoints')
						->set('openhouse_house_id', $house->id)
						->getList();
		$this->assign('has_waypoint', count($waypoints) !== 0);
		
		
		return parent::display();
	}
	
}