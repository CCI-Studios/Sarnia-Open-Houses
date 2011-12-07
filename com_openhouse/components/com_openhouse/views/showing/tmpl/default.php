<?php defined('KOOWA') or die('KOOWA not installed or disabled'); ?>
<? @helper('behavior.mootools') ?>
<? JHtml::_('behavior.calendar'); ?>

<h2>Create new showing Date for <?= $showing->house->address ?></h2>

<form action="<?= @route('view=showing&id='. $showing->id) ?>" method="post" class="-koowa-grid">
	<input type="hidden" name="openhouse_house_id" value="<?= $showing->openhouse_house_id ?>" />

	<table class="form">
		<tr>
			<td align="right"><label for="start_date_field">Open House date:</label></td>
			<td><?= JHtml::_('calendar', $showing->start_date, 'start_date', 'start_date', '%Y-%m-%d'); ?></td>
		</tr>
		
		<tr>
			<td class="right"><label for="hours_field">Hours:</label></td>
			<td><input type="text" name="hours" value="<?= $showing->hours ?>" /></td>
		</tr>
	
		<tr class="action">
			<td width="125Ï2">&nbsp;</td>
			<td><button type="submit"><span>Save</span></button></td>
		</tr>
	</table>

</form>