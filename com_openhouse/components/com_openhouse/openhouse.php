<?php
defined('KOOWA') or die;

KLoader::load('site::com.openhouse.mappings');
echo KFactory::get('site::com.openhouse.dispatcher')->dispatch();