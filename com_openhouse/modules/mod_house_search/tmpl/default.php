<form action="<?= @route('option=com_openhouse&view=houses') ?>" method="get" class="openhouse-quick-search -koowa-grid">

	<table>
		<tr>
			<td align="right"><label><?= @text('Min Price') ?>:</label></td>
			<td><input type="text" name="min_price" value="<?= KRequest::get('get.min_price', 'raw') ?>" /></td>
		</tr>

		<tr>
			<td align="right"><label><?= @text('Max Price') ?>:</label></td>
			<td><input type="text" name="max_price" value="<?= KRequest::get('get.max_price', 'raw') ?>" /></td>
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
			<td><button class="red"><span>Search</span></button></td>
		</tr>
	</table>
</form>