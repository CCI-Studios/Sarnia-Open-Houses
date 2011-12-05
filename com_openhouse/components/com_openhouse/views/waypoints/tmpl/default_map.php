<? @helper('behavior.mootools') ?>
<? @helper('behavior.modal') ?>

<?php
	$width = 193;
	$height = 193;
	
	$address = $waypoints->current()->house->getFullAddress();
	$markers[] = 'color:0xff624f|'. $waypoints->current()->house->getFullAddress();
	
	while ($waypoints->next()) {
		$to[] = $waypoints->current()->house->getFullAddress();
		$markers[] = 'color:0xff624f|'. $waypoints->current()->house->getFullAddress();
	}
	
	$dynamic_url = "http://maps.google.com/maps?";
	$map['saddr'] = $address;
	$map['hl'] = 'en';
	$map['t'] = 'm';
	$map['z'] = 12;
	if (count($waypoints) > 1) {
		$map['daddr'] = implode(' to:', $to);
	}

	$poser_url = "http://maps.googleapis.com/maps/api/staticmap?";
	$poser = array();
	$poser['center'] = $address;
	$poser['zoom'] = 12;
	$poser['size'] = $width .'x'. $height;
	$poser['sensor'] = 'false';
?>

<div class="center">
	<a href="<?= $dynamic_url . http_build_query($map) .''?>" target='_blank'>
		<img src="<?= $poser_url . http_build_query($poser) .'&markers='. implode('&markers=', $markers) ?>" 
			width="<?= $width ?>" 
			height="<?= $height ?>" 
			class="bordered" />
	</a>
</div>