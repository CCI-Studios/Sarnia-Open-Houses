<form action="" method="get" class="openhouse-quick-search -koowa-grid">
	
	<div class="field">
		<label>Min Price</label>
		<input type="text" name="min-price" />
	</div>
	
	<div class="field">
		<label>Max Price</label>
		<input type="text" name="max-price" />
	</div>
	
	<div class="field">
		<label>Location</label>
		<?// @helper('com://site/openhouse.template.helper.listbox.locations') ?>
	</div>
	
	<div class="actions center">
		<button class="red"><span>Search</span></button>
	</div>
</form>