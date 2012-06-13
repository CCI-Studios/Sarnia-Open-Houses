<?php

class ComOpenhouseControllerCart extends ComDefaultControllerResource
{

	protected function _actionPost(KCommandContext $context)
	{

		$operation = $context->data['operation'];
		$id = $context->data['id'];
		
		if ($operation == 'add') {
			$message = $this->_addHouse($id);
		} elseif ($operation == 'remove')  {
			$message = $this->_removeHouse($id);
		} elseif ($operation == 'clear') {
			$message = $this->_clearHouses();
		}

		$this->_redirect($message);
	}

	private function _addHouse($id)
	{
		$houses = $this->_getHouses();
		if (!in_array($id, $houses)) {
			$houses[] = $id;
			$this->_setHouses($houses);
		}
		
		//return 'The house was added to your cart.';
		return null;
	}

	private function _removeHouse($id)
	{
		$houses = $this->_getHouses();
		
		$houses = array_diff($houses, array($id));
		$this->_setHouses($houses);

		//return 'The house was removed from your cart.';
		return null;
	}

	private function _clearHouses()
	{
		$this->_setHouses(array());
		return null;
	}

	private function _getHouses()
	{
		return json_decode(KRequest::get('cookie.sloh.cart', 'json', '[]'));
	}

	private function _setHouses($houses = array())
	{
		$houses = array_values($houses);

		KRequest::set('cookie.sloh.cart', json_encode($houses));
	}

	private function _redirect($message)
	{


		$this->setRedirect(KRequest::referrer()? KRequest::referrer():'/', $message);
	}

}