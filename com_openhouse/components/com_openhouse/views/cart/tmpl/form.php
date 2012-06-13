<form style="display: inline;" action="index.php?option=com_openhouse&view=cart" class="-koowa-form" method="post">
	<input type="hidden" name="operation" value="<?= $operation ?>" />
	<input type="hidden" name="id" value="<?= $house ?>" />
	<button><span>
		<? if ($operation == 'add'): ?>
			Add to my List
		<? else: ?>
			Remove from my List
		<? endif; ?>
	</span></button>
</form>