<?php defined('KOOWA') or die('KOOWA not installed or disabled'); ?>
<? @helper('behavior.mootools') ?>
<? JHtml::_('behavior.calendar'); ?>

<h2>Create new showing Date for <?= $showing->house->address ?></h2>

<form action="<?= @route('view=showing&id='. $showing->id) ?>" method="post" class="-koowa-grid">
	<input type="hidden" name="openhouse_house_id" value="<?= $showing->openhouse_house_id ?>" />

	<div class="field">
		<?= JHtml::_('calendar', $showing->start_date, 'start_date', 'start_date', '%Y-%m-%d', array(
			'placeholder' => 'Start Date'
		)); ?>
	</div>

	<div class="field">
		<?= JHtml::_('calendar', $showing->end_date, 'end_date', 'end_date', '%Y-%m-%d', array(
			'placeholder' => 'End Date'
		)); ?>
	</div>

	<div class="field">
		<input type="text" name="hours" value="<?= $showing->hours ?>" placeholder="Hours" />
	</div>

	<div class="action">
		<button><span>Submit</span></button>
	</div>

</form>