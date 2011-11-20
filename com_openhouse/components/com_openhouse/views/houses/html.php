<?php

class ComOpenHouseViewHousesHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$params = JFactory::getApplication()->getParams();

		$this->assign('show_pagination', $params->get('show_pagination', 1));
		$this->assign('pagination_limit', $params->get('pagination_limit', 10));
		$this->assign('show_search', $params->get('show_search', 1));
		$this->assign('page_title', $params->get('page_title', 'View Houses'));
		$this->assign('show_page_title', $params->get('show_page_heading', 1));
		
		echo parent::display();
	}
}