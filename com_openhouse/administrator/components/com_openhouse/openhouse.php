<?php
defined('KOOWA') or die('Koowa is not installed');

echo KFactory::get('admin::com.openhouse.dispatcher')->dispatch();