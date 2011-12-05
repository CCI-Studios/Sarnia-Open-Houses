<? if (count($house->images)): ?>
	<img 
		src="media://com_openhouse/uploads/large/<?= $house->images->current()->filename ?>"
		width="75"
		class="left bordered"
		style="margin-right: 10px;" />
<? else: ?>
	<img
		src="http://dummyimage.com/75x35/f80000/ffffff&text=Coming+Soon"
		width="75"
		class="left bordered"
		style="margin-right: 10px;" />
<?  endif; ?>

<h2><a href="<?= @route('view=house&id='. $house->id) ?>">
	<?= $house->address ?>
</a></h2>
<p><?= @format('price', $house->price) ?></p>
