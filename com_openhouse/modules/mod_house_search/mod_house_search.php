<?php

echo KService::get('mod://site/house_search.html', array(
 	'params'	=> $params,
 	'module'	=> $module,
	'attribs'	=> $attribs
))->display();