<?php
defined('KOOWA') or die('Koowa is not installed');

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_foobar')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}
echo KService::get('com://admin/openhouse.dispatcher')->dispatch();