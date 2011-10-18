<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<script src="media://com_openhouse/js/forms.js" />
<style src="media://com_openhouse/css/openhouse.css" />

<? if ($house->isNew()): ?>
	<h2>Create a new Home Listing</h2>
	
	<p>*note: pictures and showing times can be added after basic details are saved.</p>
<? else: ?>
	<h2>Edit Listing for <?= $house->address ?></h2>
<? endif; ?>

<form action="<?= @route('id='. $house->id) ?>" method="post" class="-koowa-form">
	<? if ($house->isNew()): ?>
		<input type="hidden" name="openhouse_agent_id" value="<?= $agent->id ?>">
	<? else: ?>
	
	<? endif; ?>
	
	<div class="field">
		<input 
			class="inputfield" 
			placeholder="Price" 
			data-prefix="$" 
			type="text" 
			id="field_price" 
			name="price" 
			value="<?= $house->price ?>" />
	</div>
	
	<div class="field">
		<input 
			class="inputfield" 
			placeholder="Bedrooms" 
			data-suffix=" Bedrooms" 
			type="text" 
			id="field_bedrooms" 
			name="bedrooms" 
			value="<?= $house->bedrooms ?>" />
	</div>
	
	<div class="field">
		<input 
			class="inputfield" 
			placeholder="Bathrooms" 
			data-suffix=" Bathrooms" 
			type="text" 
			id="field_bathrooms" 
			name="bathrooms" 
			value="<?= $house->bathrooms ?>" />
	</div>
	
	<div class="field">
		<input 
			class="inputfield" 
			placeholder="Address" 
			type="text" 
			id="field_address" 
			name="address" 
			value="<?= $house->address ?>" />
	</div>
	
	<div class="field">
		<input 
			class="inputfield" 
			placeholder="City" 
			type="text" 
			id="field_city" 
			name="city" 
			value="<?= $house->city ?>" />
	</div>
	
	<div class="field">
		<input 
			class="inputfield" 
			placeholder="Postal Code" 
			type="text" 
			id="field_postal" 
			name="postal" 
			value="<?= $house->postal ?>" />
	</div>
	
	<div class="field">
		<input 
			class="inputfield" 
			placeholder="Description" 
			type="text" 
			id="field_description" 
			name="description" 
			value="<?= $house->description ?>" />
	</div>
	
	<div class="actions">
		<? if ($house->isNew()): ?>
			<button><span>Create</span></button>
		<? else: ?>
			<button><span>Update</span></button>
		<? endif; ?>
	</div>
</form>

