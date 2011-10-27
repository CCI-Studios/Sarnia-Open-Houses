<? defined('KOOWA') or die ?>
<?= @helper('behavior.mootools') ?>
<script src="media://com_openhouse/js/gallery.js" />
<style src="media://com_openhouse/css/gallery.css" />

<? if (count($images)): ?>
<div class="openhouse-gallery">
	<div class="main-image"></div>

	<ul>
		<? foreach($images as $image): ?>
			<li><img src="media://com_openhouse/uploads/small/<?= $image->filename ?>" height="27" /></li>
		<? endforeach; ?>
	</ul>
</div>
<? endif; ?>
