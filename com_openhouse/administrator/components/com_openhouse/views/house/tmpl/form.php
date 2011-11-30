<? defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route('id='. $house->id) ?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>House Details</legend>

			<ul class="adminformlist">
				<li>
					<label>Address</label>
					<input type="text" name="address" class="inputbox" value="<?= $house->address ?>" />
				</li>
				<li>
					<label>City</label>
					<?= @helper('listbox.locations', array('selected' => $house->city, 'value'=>'title', 'name'=>'city')); ?>
				</li>
				<li>
					<label>Province</label>
					<?= @helper('listbox.provinces', array('selected' => $house->province)); ?>
				</li>
			</ul>
		</fieldset>

		<fieldset class="adminform">
			<legend>Description</legend>
			<textarea name="description" style="width: 100%; height: 250px;"><?= $house->description ?></textarea>
		</fieldset>
	</div>

	<div class="width-40 fltlft">
		<fieldset class="adminform">
			<legend>Listing Details</legend>
			<ul>
				<li>
					<label>Price</label>
					<input type="text" name="price" class="inputbox" value="<?= $house->price ?>" />
				</li>

				<li>
					<label>Bedrooms</label>
					<input type="text" name="bedrooms" class="inputbox" value="<?= $house->bedrooms ?>" />
				<li>
					<label>Bathrooms</label>
					<input type="text" name="bathrooms" class="inputbox" value="<?= $house->bathrooms ?>" />
				<li>
					<label>Virtual Tour Link</label>
					<input type="text" name="virtual_link" class="inputbox" value="<?= $house->virtual_link ?>" />
			</ul>
		</fieldset>
	</div>
</form>
