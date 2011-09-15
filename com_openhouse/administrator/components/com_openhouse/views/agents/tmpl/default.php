<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="1%"><?= @helper('grid.checkall') ?></th>
				<th><?= @helper('grid.sort', array('column' => 'name')) ?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="2" align="center"><div class="container">
					<?= @helper('paginator.pagination', array('total'=>$total)) ?>
				</div></td>
			</tr>
		</tfoot>
		
		<tbody>
			<? foreach ($agents as $agent): ?>
			<tr>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$agent)) ?></td>
				<td><a href="<?= @route('view=location&id='. $agent->id) ?>">
					<?= $agent->name ?>
				</a></td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>
