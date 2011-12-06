<style src="media://com_openhouse/css/openhouse.css" />
<script src="media://lib_koowa/js/koowa.js" />

<? if (count($waypoints)): ?>
<module title="Directions" position="sidebar">
	<?= @template('default_map') ?>
	<p class="center">Click the map for directions</p>
</module>
<? endif; ?>

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
			<form action="<?= 'index.php?option=com_openhouse&view=waypoint&id='. $wp->id ?>" method="post" class="-koowa-form">
				<input type="hidden" name="action" value="delete" />
				<button type="submit" class="plain">Remove Bookmark</button>
			</form>
		</td>
	</tr>
	<? endforeach; ?>

	<? if (!count($waypoints)): ?>
	<tr>
		<td colspan="3">
			<p>You have no bookmarks.</p>
		</td>
	</tr>
	<? endif; ?>
</table>