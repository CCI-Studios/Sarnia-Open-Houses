<? defined('KOOWA') or die ?>
<?= @helper('behavior.mootools') ?>
<?= @helper('behavior.modal') ?>
<script src="media://com_openhouse/js/gallery.js" />
<style src="media://com_openhouse/css/gallery.css" />

<? if (count($images)): ?>
<div class="openhouse-gallery" data-path="media://com_openhouse/uploads/large/">
	<div class="main-image"><div>
		<img class="image1" src="media://com_openhouse/uploads/large/<?= $images->current()->filename ?>" />
		<img class="image2" src="media://com_openhouse/uploads/large/<?= $images->current()->filename ?>" />

		
		
		<div class="top-shadow"></div>
		<div class="bottom-shadow"></div>
		<div class="prev-button"></div>
		<div class="next-button"></div>
		<? if (isset($price)): ?>
			<div class="price"><span><span><?= @format('price', $price) ?></span></span></div>
		<? endif; ?>
	</div></div>

	<ul class="thumbnails">
		<? foreach($images as $image): ?>
			<li data-filename="<?= $image->filename ?>"><img src="media://com_openhouse/uploads/small/<?= $image->filename ?>" height="27" /></li>
		<? endforeach; ?>
	</ul>
</div>
<? endif; ?>
