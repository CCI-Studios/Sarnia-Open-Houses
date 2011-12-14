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
	
	<table class="form">
		<tr>
			<td align="right"><label for="price_field">Price:</label></td>
			<td><input class="inputfield" type="text" id="price_field" name="price" value="<?= $house->price ?>" /></td>
		</tr>
		
		<tr>
			<td align="right"><label for="bedrooms_field">Bedrooms:</label></td>
			<td><input class="inputfield" type="text" id="bedrooms_field" name="bedrooms" value="<?= $house->bedrooms ?>" /></td>
		</tr>
			
		<tr>
			<td align="right"><label for="bathrooms_field">Bathrooms:</label></td>
			<td><input class="inputfield" type="text" id="bathrooms_field" name="bathrooms" value="<?= $house->bathrooms ?>" /></td>
		</tr>
		
		<tr>
			<td align="right"><label for="address_field">Address:</label></td>
			<td><input class="inputfield" type="text" id="address_field" name="address" value="<?= $house->address ?>" /></td>
		</tr>
		
		<tr>
			<td align="right"><label for="city_field">City:</label></td>
			<td><?= @helper('listbox.locations', array('selected' => $house->city, 'value'=>'title', 'name'=>'city')) ?></td>
		</tr>
		
		<tr>
			<td align="right"><label for="province_field">Province:</label></td>
			<td><?= @helper('listbox.provinces', array('selected' => $house->province)) ?></td>
		</tr>
		
		<tr>
			<td align="right"><label for="postal_field">Postal Code:</label></td>
			<td><input class="inputfield" type="text" id="field_postal" name="postal" value="<?= $house->postal ?>" /></td>
		</tr>
		
		<tr>
			<td align="right"><label for="virtual_link_field">Virtual Tour:</label></td>
			<td><input 
					class="inputfield" 
					type="text" 
					id="virtual_link_field" 
					name="virtual_link"
					placeholder="http://site.com"
					value="<?= $house->virtual_link ?>" /></td>
		</tr>
		
		<tr>
			<td align="right"><label for="enabled_field">Listed:</label></td>
			<td><?= @helper('select.booleanlist', array('selected' => $house->enabled, 'name' => 'enabled'))?>
		
		<tr>
			<td align="right" valign="top"><label for="description_field">Description:</label></td>
			<td>
				<textarea name="description" id="description_field"><?= $house->description ?></textarea>
				<p>Description is limited to 200 characters.</p>
			</td>
		</tr>
		
		<tr class="actions">
			<td width="100">&nbsp;</td>
			<td>
				<? if ($house->isNew()): ?>
					<button type="submit"><span>Create</span></button>
				<? else: ?>
					<button type="submit"><span>Update</span></button>
				<? endif; ?>
			</td>
		</tr>
		
	
	</table>
</form>

