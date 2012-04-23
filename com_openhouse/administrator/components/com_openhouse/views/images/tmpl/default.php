<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<script src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route('view=images') ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="25"><?= @helper('grid.checkall'); ?></th>
				<th><?= @helper('grid.sort', array('column'=>'filename')); ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'openhouse_house_id', 'title' => 'House')); ?></th>
				<th width="50"><?= @helper('grid.sort', array('column'=>'ordering')); ?></th>
				<th width="25"><?= @helper('grid.sort', array('column'=>'id')); ?></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<td colspan="5">
					<?= @helper('paginator.pagination', array( 'total' => $total )); ?>
				</td>
			</tr>
		</tfoot>

		<tbody>
			<? foreach ($images as $image): ?>
			<tr>
				<td align="center"><?= @helper('grid.checkbox', array('row' => $image)); ?></td>
				<td><?= @escape($image->filename) ?></td>
				<td align="center"><?= @escape($image->openhouse_house_id) ?></td>
				<td align="center"><?= @helper('grid.order', array('row' => $image)) ?></td>
				<td align="center"><?= @escape($image->id) ?></td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>
