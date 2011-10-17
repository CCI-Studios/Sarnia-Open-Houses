<?php
defined('KOOWA') or die('Koowa is not installed');

echo KService::get('com://admin/openhouse.dispatcher')->dispatch();