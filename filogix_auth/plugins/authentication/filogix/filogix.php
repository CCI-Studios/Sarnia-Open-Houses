<?php
defined('_JEXEC') or die;
jimport('joomla.event.plugin');
jimport('joomla.user.helper');

class plgAuthenticationFilogix extends JPlugin
{

	public function onUserAuthenticate($credentials, $options, &$response)
	{
		$message = '';
		$success = 0;

		if (function_exists('curl_init')) {

			if (strlen($credentials['username']) && strlen($credentials['password'])) {
				$curl = curl_init('http://www.filogixdms.com/slon/login_submit.html');
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($curl, CURLOPT_HEADER, 1);
				curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(
					'js_check'	=> 'ok',
					'bTokenMandatory'	=> 'false',
					'user'	=> $credentials['username'],
					'password' => $credentials['password']
				)));

				$result = curl_exec($curl);
				$info = curl_getinfo($curl);
				curl_close($curl);

				$header = substr($response, 0, $info['header_size']);

				switch ($info['http_code']) {
					case '302':
						$message = JText::_('JGLOBAL_AUTH_ACCESS_GRANTED');
						$success = 1;
						break;
					case '200':
						$message = JText::_('JGLOBAL_AUTH_ACCESS_DENIED');
						break;
					default:
						$message = JText::_('JGLOBAL_AUTH_UNKNOWN_ACCESS_DENIED');
						break;
				}
			} else {
				$message = JText::_('User is blacklisted');
			}
		} else {
			$message = JText::_('cURL is\'t installed');
		}

		$response->type = 'Filogix';
		if ($success) {
			$response->status = JAUTHENTICATE_STATUS_SUCCESS;
			$response->error_message = '';

			$response->email = $credentials['username'] .'@filogix.com';
			$response->username = $credentials['username'];
			$response->password = $credentials['password'];

			$this->_createUser($credentials);
		} else {
			$response->status = JAUTHENTICATE_STATUS_FAILURE;
			$response->error_message = JText::_('JGLOBAL_AUTH_FAILED', $message);
		}
	}


	protected function _createUser($credentials)
	{
		$user = JUser::getInstance();
		if ($id = intval(JUserHelper::getUserId($credentials['username']))) {
			return;
		}

		$defaultUserGroup = $this->params->get('usertype', 2); // make param;
		$acl = JFactory::getACL();

		$user->set('id',		0);
		$user->set('name',		$credentials['username']);
		$user->set('username',	$credentials['username']);
		$user->set('email',		$credentials['username'] .'@filogix.com');
		$user->set('usertype',	'depreciated');
		$user->set('groups',	array($defaultUserGroup));

		if ($user->save()) {
			$row = KService::get('com://admin/openhouse.database.row.agent');
			$row->set('name', $credentials['username']);
			$row->set('user_id', $user->id);
			$row->save();
		}
	}

}
