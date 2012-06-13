<style src="media://com_openhouse/css/openhouse.css" />

<ul><? foreach ($houses as $house): ?>
	<li>
		<a href="<?= @route('view=house&id='. $house->id) ?>"><?= @escape($house->address) ?></a>
		&nbsp;&nbsp;
		<form action="<?= @route('view=house&id='. $house->id) ?>" method="post" class="-koowa-form" style="display: inline">
			<input type="hidden" name="action" value="delete" />
			<button type="submit" class="plain">Delete</button>
		</form>
	</li>
<? endforeach; ?></ul>