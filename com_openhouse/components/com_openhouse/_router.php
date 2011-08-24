<?php

function openhouseBuildRoute(&$query)
{
	$segments = array();
	
	if (isset($query['view']) && $query['view'] == 'profile') {
		$segments[] = 'profile';
		unset($query['view']);
		
		if (isset($query['layout']) && $query['layout'] == 'form') {
			$segments[] = 'edit';
			unset($query['layout']);
		}
	}
	
	return $segments;
}

function openhouseParseRoute($segments)
{
	$vars = array();
	
	if ($segments[0] == 'profile') {
		$vars['view'] = 'profile';
		
		if ($segments[1] == 'edit') {
			$vars['layout'] = 'form';
		}
	}
	
	return $vars;
}