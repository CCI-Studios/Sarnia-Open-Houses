<?php

class ComOpenhouseViewCartsHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$ids = json_decode(KRequest::get('cookie.sloh.cart', 'json', '[]'));
		if (count($ids)) {
			$model = $this->getService('com://site/openhouse.model.houses');
			$houses = $model->ids($ids)->getList();
		} else {
			$houses = array();
		}	
		

		$this->assign('houses', $houses);

		return parent::display();
	}

}