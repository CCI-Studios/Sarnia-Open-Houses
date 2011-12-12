<? @helper('behavior.mootools') ?>
<? @helper('behavior.modal') ?>

<?php
	$width = 193;
	$height = 193;
?>

<div class="center">
	<a href="<?= $waypoints->getDirectionsUrl() ?>" target='_blank'>
		<img src="<?= $waypoints->getPoserSrc($width, $height) ?>" width="<?= $width ?>" height="<?= $height ?>" class="bordered" />
	</a>
</div>