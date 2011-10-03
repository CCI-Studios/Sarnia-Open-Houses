<? defined('KOOWA') or die ?>

<ul>
<? foreach($images as $image): ?>
	<li>
		<?= $image->filename ?>
		<a href="#">Delete</a>
	</li>
<? endforeach; ?>
</ul>