<form action="<?= @route('option=com_openhouse&view=houses') ?>" method="get" class="openhouse-quick-search -koowa-grid">

	<table>
		<tr>
			<td align="right"><label for="mod_min_price"><?= @text('Min Price') ?>:</label></td>
			<td><input type="text" id="mod_min_price" name="min_price" value="<?= KRequest::get('get.min_price', 'raw') ?>" /></td>
		</tr>

		<tr>
			<td align="right"><label for="mod_max_price" ><?= @text('Max Price') ?>:</label></td>
			<td><input type="text" name="max_price" id="mod_max_price" value="<?= KRequest::get('get.max_price', 'raw') ?>" /></td>
		</tr>

		<tr>
			<td align="right"><label><?= @text('Location') ?>:</label></td>
			<td><?= @helper('com://admin/openhouse.template.helper.listbox.locations', array(
				'name' 	=> 'city',
				'value'	=> 'title',
				'selected' => KRequest::get('get.city', 'string')
			)) ?></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td><button type="submit" class="red"><span>Search</span></button></td>
		</tr>
	</table>
</form>