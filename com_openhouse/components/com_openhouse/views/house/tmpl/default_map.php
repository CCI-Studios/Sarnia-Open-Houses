<? @helper('behavior.mootools') ?>
<? @helper('behavior.modal') ?>

<?php
	$address = $house->address .','. $house->city .','. $house->province .','. $house->postal;
	$width = 267;
	$height = 153;

	$dynamic_url = 'http://maps.google.com/maps?';
	$map = array();
	$map['f'] = 'q';
	$map['hl'] = 'en';
	$map['q'] = $address;
	$map['ie'] = 'UTF8';
	$map['hnear'] = $address;
	$map['t'] = 'm';
	$map['z'] = 14;
	$map['iwloc'] = '';
	$map['output'] = 'embed';

	$poser_url = "http://maps.googleapis.com/maps/api/staticmap?";
	$poser = array();
	$poser['center'] = $address;
	$poser['zoom'] = 14;
	$poser['size'] = $width .'x'. $height;
	$poser['sensor'] = 'false';
	$poser['markers'] = 'color:0xff625f|'. $address;
?>

<a rel="{handler: 'iframe', size: {x: 540, y: 400}}" class="modal" href="<?= $dynamic_url . http_build_query($map) ?>">
	<img src="<?= $poser_url . http_build_query($poser) ?>" width="<?= $width ?>" height="<?= $height ?>" style="display: block;" />
</a>