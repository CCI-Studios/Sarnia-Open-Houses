<?php
	$address = urlencode('110 Water St, Sarnia, On N7T 5T2, Canada');
	$width = 267;
	$height = 153;
	$url = 'http://maps.google.com/maps?';
	
	$map = array();
	$map['f'] = 'q';
	$map['hl'] = 'en';
	$map['q'] = $address;
	$map['ie'] = 'UTF8';
	$map['hnear'] = $address;
	$map['t'] = 'm';
	$map['z'] = '14';
	$map['iwloc'] = '';
	$map['output'] = 'embed';
?>

<iframe
	width="<?= $width ?>"
	height="<?= $height ?>"
	frameborder="0"
	scrolling="no"
	marginheight="0"
	marginwidth="0"
	src="<?= $url . http_build_query($map) ?>"></iframe>