<? defined('KOOWA') or die ?>

<ul>
	<? foreach($houses as $house): ?>
	<li><a href="<?= @route('view=house&id='. $house->id) ?>">
		<?= "{$house->address}: {$house->id}" ?>
	</a></li>
	<? endforeach; ?>
</ul>