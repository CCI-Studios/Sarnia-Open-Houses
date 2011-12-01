<form action="" method="get" class="openhouse-quick-search -koowa-grid">

	<table>
		<tr>
			<td align="right"><label><?= @text('Min Price') ?>:</label></td>
			<td><input type="text" name="min-price" /></td>
		</tr>

		<tr>
			<td align="right"><label><?= @text('Max Price') ?>:</label></td>
			<td><input type="text" name="max-price" /></td>
		</tr>

		<tr>
			<td align="right"><label><?= @text('Location') ?>:</label></td>
			<td><?= @helper('com://admin/openhouse.template.helper.listbox.locations') ?></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td><div class="button red"><span>Search</span></div></td><!-- FIXME enable search -->
		</tr>
	</table>
</form>