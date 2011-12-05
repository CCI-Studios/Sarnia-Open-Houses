<?php

class ComOpenhouseViewNotificationsHtml extends ComOpenhouseViewHtml
{
	
	public function display()
	{
		$profiles = $this->getService('com://site/openhouse.model.profiles')
						->set('notifications', 1)
						->getList();
		$this->assign('profile_count', count($profiles));
		$house_count = 0;
		$email_count = 0;
		
		$config =& JFactory::getConfig();
		$mailer =& JFactory::getMailer();
		$sender = array($config->getValue('config.mailfrom'),$config->getValue('config.fromname'));
		$subject = "New House Listings from Sarnia Lambton Open Houses";
		$body = "<p>Hello {{NAME}},</p><p>There are new houses on Sarnia Lambton Open Houses which match your profile. They are:</p>\n<ul>";
		$signature = "</ul>\n<p> - Sarnia Lambton Open Houses</p>\n<p><small>You may turn off email notifications by editing your profile on site.</small></p>";
		
		foreach ($profiles as $profile) {
			$user = JUser::getInstance($profile->created_by);
			
			$houses = $this->getService('com://site/openhouse.model.houses')
							->set('min_price', $profile->min_price)
							->set('max_price', $profile->max_price)
							->set('city', $profile->city)
							->set('province', $profile->province)
							->set('created_after', date('Y-m-d', strtotime("-1 day")))
							->getList();
			$house_count += count($houses);
			
			$full_body = $body;
			foreach ($houses as $house) {
				$full_body .= "<li><a href=\"". JRoute::_('index.php?option=com_openhouse&view=house&id='. $house->id) ."\">{$house->address}, \${$house->price}</a></li>\n";
			}
			$full_body .= $signature;
			$full_body = str_replace(array('{{NAME}}'), array($user->name), $full_body);
			
			$mailer = JFactory::getMailer();
			$mailer->setSender($sender);
			$mailer->addRecipient($user->email);
			$mailer->setSubject($subject);
			$mailer->setBody($full_body);
			$mailer->isHtml();
			
			if ($mailer->send()) {
				$email_count++;
			}
		}
		$this->assign('house_count', $house_count);
		$this->assign('email_count', $email_count);
		
		return parent::display();
	}
	
}