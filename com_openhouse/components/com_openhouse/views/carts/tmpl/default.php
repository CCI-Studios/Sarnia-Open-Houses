<section class="openhouse-houses clearfix">
	<h2>My List</h2>

	<? if (count($houses)): ?>
		<?= @template('com://site/openhouse.view.houses.default_results', array(	
		)); ?>

		<section class="gradient">
			<form style="display: inline;" action="index.php?option=com_openhouse&view=cart" class="-koowa-form" method="post">
				<input type="hidden" name="operation" value="clear" />
				<button type="submit"><span>
					Clear my List
				</span></button>
			</form>
		</section>
	<? else: ?>
		<section class="gradient">
			Add houses to your list to have easy access to them later.
		</section>
	<? endif; ?>
</section>