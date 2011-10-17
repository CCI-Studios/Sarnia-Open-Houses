<?php
defined('KOOWA') or die;

include 'mappings.php';
echo KService::get('com://site/openhouse.dispatcher')->dispatch();
