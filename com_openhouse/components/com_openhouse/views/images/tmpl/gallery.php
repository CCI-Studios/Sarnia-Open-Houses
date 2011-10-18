<? defined('KOOWA') or die ?>
<?= @helper('behavior.mootools') ?>
<script src="media://com_openhouse/js/gallery.js" />

<? if (count($images)): ?>
	<div class="openhouse-gallery">
		<div class="main-image"></div>
	
		<ul>
			<? foreach($images as $image): ?>
				<li><img src="media://com_openhouse/uploads/<?= $image->filename ?>" height="65" /></li>
			<? endforeach; ?>
		</ul>
	</div>
<? endif; ?>