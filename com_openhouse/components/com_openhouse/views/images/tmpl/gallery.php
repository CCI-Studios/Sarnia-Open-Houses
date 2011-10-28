<? defined('KOOWA') or die ?>
<?= @helper('behavior.mootools') ?>
<script src="media://com_openhouse/js/gallery.js" />
<style src="media://com_openhouse/css/gallery.css" />

<? if (count($images)): ?>
<div class="openhouse-gallery">
	<div class="main-image"><div>
		<img src="media://com_openhouse/uploads/large/house1.png" />
		
		<div class="top-shadow"></div>
		<div class="bottom-shadow"></div>
		<div class="prev-button"></div>
		<div class="next-button"></div>
		<div class="price"><span>$159,900</span></div>
	</div></div>

	<ul>
		<? foreach($images as $image): ?>
			<li><img src="media://com_openhouse/uploads/small/<?= $image->filename ?>" height="27" /></li>
		<? endforeach; ?>
	</ul>
</div>
<? endif; ?>
