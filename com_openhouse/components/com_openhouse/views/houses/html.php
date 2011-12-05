<?php

class ComOpenHouseViewHousesHtml extends ComOpenhouseViewHtml
{

	public function display()
	{
		$params = JFactory::getApplication()->getParams();
		$this->getModel()->set('limit', $params->get('pagination_limit', 10));
		$this->getModel()->set('enabled', 1);
		$this->getModel()->set('hasShowing', true);

		$this->assign('show_pagination', $params->get('show_pagination', 1));
		$this->assign('pagination_limit', $params->get('pagination_limit', 10));
		$this->assign('show_search', $params->get('show_search', 1));
		$this->assign('page_title', $params->get('page_title', 'View Houses'));
		$this->assign('show_page_title', $params->get('show_page_heading', 1));
		$this->assign('show_custom_search', $params->get('show_custom_search', 0));

		echo parent::display();
	}
}