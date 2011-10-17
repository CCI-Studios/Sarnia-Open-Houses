<?php
defined('KOOWA') or die;

KLoader::loadFile('site::com.openhouse.mappings');
echo KService::get('com://site/openhouse.dispatcher')->dispatch();
