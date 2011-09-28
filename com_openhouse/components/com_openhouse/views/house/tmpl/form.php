<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />

<? if ($house->isNew()): ?>
	<h2>Create a new Home Listing</h2>
<? else: ?>
	<h2>Edit Listing for <?= $house->address ?></h2>
<? endif; ?>

<form action="<?= @route('id='. $house->id) ?>" method="post" class="-koowa-form">
	<? if ($house->isNew()): ?>
		<input type="hidden" name="openhouse_agent_id" value="<?= $agent->id ?>">
	<? else: ?>
	
	<? endif; ?>
	
	<div class="field">
		<label for="field_price"><?= @text('Price') ?>:</label><br>
		<input type="text" id="field_price" name="price" value="<?= $house->price ?>" />
	</div>
	
	<div class="field">
		<label for="field_bedrooms"><?= @text('Bedrooms') ?>:</label><br>
		<input type="text" id="field_bedrooms" name="bedrooms" value="<?= $house->bedrooms ?>" />
	</div>
	
	<div class="field">
		<label for="field_bathrooms"><?= @text('Bathrooms') ?>:</label><br>
		<input type="text" id="field_bathrooms" name="bathrooms" value="<?= $house->bathrooms ?>" />
	</div>
	
	<div class="field">
		<label for="field_address"><?= @text('Address') ?>:</label><br>
		<input type="text" id="field_address" name="address" value="<?= $house->address ?>" />
	</div>
	
	<div class="field">
		<label for="field_city"><?= @text('City') ?>:</label><br>
		<input type="text" id="field_city" name="city" value="<?= $house->city ?>" />
	</div>
	
	<div class="field">
		<label for="field_postal"><?= @text('Postal Code') ?>:</label><br>
		<input type="text" id="field_postal" name="postal" value="<?= $house->postal ?>" />
	</div>
	
	<div class="field">
		<label for="field_description"><?= @text('Description') ?>:</label><br>
		<input type="text" id="field_description" name="description" value="<?= $house->description ?>" />
	</div>
	
	<div class="actions">
		<? if ($house->isNew()): ?>
			<button>Create</button>
		<? else: ?>
			<button>Update</button>
		<? endif; ?>
	</div>
</form>

