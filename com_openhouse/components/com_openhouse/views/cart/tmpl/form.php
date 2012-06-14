<form style="display: inline;" action="index.php?option=com_openhouse&view=cart" class="-koowa-form" method="post">
	<input type="hidden" name="operation" value="<?= $operation ?>" />
	<input type="hidden" name="id" value="<?= $house ?>" />

	<button type="submit"><span><?= ($operation == 'add')? 'Add to my Lists':'Remove from my Lists' ?></span></button>
</form>