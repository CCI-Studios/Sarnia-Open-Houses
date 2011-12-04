<form action="<?= @route('view=houses') ?>" method="get" class="-koowa-grid gradient">
	<table class="form">
		<tr>
			<td align="right"><label for="min_price_field">Min Price:</label></td>
			<td><input class="inputfield" type="text" name="min_price" id="min_price_field" value="<?= KRequest::get('get.min_price', 'raw', null) ?>" /></td>
			
		
			<td align="right"><label for="max_price_field">Max Price:</label></td>
			<td><input class="inputfield" type="text" id="max_price_field" name="max_price" value="<?= KRequest::get('get.max_price', 'raw', null) ?>" /></td>
		</tr>
		
		<tr>
			<td align="right"><label>City:</label></td>
			<td><?= @helper('listbox.locations', array('selected' => KRequest::get('get.city', 'string'), 'name' => 'city', 'value' => 'title')) ?></td>
			
			<td align="right"><label>Sort:</label></td>
			<td><?= @helper('listbox.houseSorting', array('selected' => KRequest::get('get.sort', 'string'))) ?></td>
		</tr>
	
		<tr class="action">
			<td width="100">&nbsp;</td>
			<td colspan="3"><button><span>Search</span></button></td>
		</tr>
	</table>
</form>