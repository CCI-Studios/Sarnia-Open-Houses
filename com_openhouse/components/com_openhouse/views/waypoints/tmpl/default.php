<style src="media://com_openhouse/css/openhouse.css" />
<script src="media://lib_koowa/js/koowa.js" />

<module title="Directions" position="sidebar">
	<?= @template('default_map') ?>
	<p class="center">Click the map for directions</p>
</module>

<form action="<?= @route('view=waypoints') ?>" method="get" class="-koowa-grid">
	<table>
		<? foreach($waypoints as $wp): ?>
		<tr>
			<td width="100" align="center" valign="top">
				<? if ($wp->house->images->current()): ?>
					<img 
						src="media://com_openhouse/uploads/large/<?= $wp->house->images->current()->filename ?>"
						width="75"
						class="bordered" />
				<? else: ?>
					<img 
						src="media://com_openhouse/images/placeholder.jpg"
						width="75"
						class="bordered" />
				<? endif; ?>
			</td>
			<td valign="top">
				<h2><a href="<?= @route('view=house&id='. $wp->house->id) ?>"><?= $wp->house->address ?></a></h2>
				<p><?= @format('price', $wp->house->price) ?></p>
			</td>
			<td width="175" valign="top">
				<div class="hidden"><?= @helper('grid.checkbox', array('row' => $wp)) ?></div>
				
			 	<div class="button" data-action="delete" data>
					<span>Remove from Cart</span>
				</div>
			</td>
		</tr>
		<? endforeach; ?>
	</table>
</form>