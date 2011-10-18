<style src="media://com_openhouse/css/openhouse.css" />

<ul><? foreach ($houses as $house): ?>
	<li>
		<a href="<?= @route('view=house&id='. $house->id) ?>"><?= @escape($house->address) ?></a>
	</li>
<? endforeach; ?></ul>