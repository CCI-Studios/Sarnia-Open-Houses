<? defined('KOOWA') or die; ?>

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<div class="form-element text">
		<label for="min_price"><?= @text('Min Price'); ?></label>
		<input type="text" class="" name="min_price" />
	</div>
	
	<div class="form-element text">
		<label for="min_price"><?= @text('Max Price'); ?></label>
		<input type="text" class="" name="max_price" />
	</div>
	
	<div class="form-element text">
		<label for="min_price"><?= @text('Location'); ?></label>
		<?= @helper('listbox.locations') ?>
	</div>
	
	<div class="form-element">
		<label for="min_price"><?= @text('Min Baths'); ?></label>
		<input type="text" class="" name="min_baths" />
	</div>
	
	<div class="form-element">
		<label for="min_price"><?= @text('Min Bedrooms'); ?></label>
		<input type="text" class="" name="min_bedrooms" />
	</div>
	
	<div class="form-element">
		<input type="submit" value="Submit" />
	</div>
</form>