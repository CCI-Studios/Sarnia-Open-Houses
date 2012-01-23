<? defined('KOOWA') or die; ?>
<? @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<td colspan="8"><div style="float: right"><?= @helper('listbox.agents') ?></div></td>
			<tr>
			<tr>
				<th width="1%"><?= @helper('grid.checkall') ?></th>
				<th><?= @helper('grid.sort', array('title' => 'address')) ?></th>
				<th width="100"><?= @helper('grid.sort', array('title' => 'city')) ?></th>
				<th width="100"><?= @helper('grid.sort', array('title' => 'province')) ?></th>
				<th width="100"><?= @helper('grid.sort', array('title' => 'postal')) ?></th>
				<th width="100"><?= @helper('grid.sort', array('title' => 'price')) ?></th>
				<th width="10"><?= @helper('grid.sort', array('title' => 'created_by')) ?></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<td colspan="7" align="center"><?= @helper('paginator.pagination', array('total'=>$total)) ?></td>
			</tr>
		</tfoot>

		<tbody>
			<? foreach ($houses as $house): ?>
			<tr>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$house)) ?></td>
				<td><a href="<?= @route('view=house&id='. $house->id) ?>">
					<?= $house->address ?>
				</a></td>
				<td align="center"><?= $house->city ?></td>
				<td align="center"><?= $house->province ?></td>
				<td align="center"><?= $house->postal ?></td>
				<td align="center"><?= $house->price ?></td>
				<td align="center"><?= $house->created_by ?></td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>
