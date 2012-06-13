<?php

class ComOpenhouseViewCartHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$houseID = $this->getModel()->getState()->houseID;
		$houses = json_decode(KRequest::get('cookie.sloh.cart', 'json', '[]'));
		$operation = (in_array($houseID, $houses))? 'remove':'add';

		$this->assign('house', $houseID);
		$this->assign('operation', $operation);
		return parent::display();
	}

}