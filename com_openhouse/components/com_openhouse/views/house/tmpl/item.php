<img src="images/default/home.png" width="75" class="left bordered" style="margin-right: 10px;" />

<h2><a href="<?= @route('view=house&id='. $house->id) ?>">
	<?= $house->address ?>
</a></h2>
<p><?= @format('price', $house->price) ?></p>
