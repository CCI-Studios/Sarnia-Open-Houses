<h2><?= $house->address ?> - $<?= $house->price ?></h2>

<?= $house->description ?>

<p><a href="<?= @route('view=house&id='. $house->id) ?>	" class="button"><span>View Details</span></a></p>