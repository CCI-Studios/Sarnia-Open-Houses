<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_openhouse/css/openhouse.css" />

<h2>
	Editing <?= $agent->name ?>'s Profile
</h2>

<form action="<?= @route('view=agent&id='. $agent->id) ?>" method="post" class="-koowa-form">
	
	<div class="field">
		<label for="field_name"><?= @text('Name') ?>:</label><br>
		<input type="text" id="field_name" name="name" value="<?= $agent->name ?>" />
	</div>
	
	<div class="field">
		<label for="field_title"><?= @text('Title') ?>:</label><br>
		<input type="text" id="field_title" name="title" value="<?= $agent->title ?>" />
	</div>
	
	<div class="field">
		<label for="field_phone"><?= @text('Phone Number') ?>:</label><br>
		<input type="text" id="field_phone" name="phone" value="<?= $agent->phone ?>" />
	</div>
	
	<div class="field">
		<label for="field_website"><?= @text('Website Address') ?>:</label><br>
		<input type="text" id="field_website" name="website" value="<?= $agent->website ?>" />
	</div>
	
	<div class="field">
		<label for="field_email"><?= @text('Email Address') ?>:</label><br>
		<input type="text" id="field_email" name="email" value="<?= $agent->email ?>" />
	</div>
	
	<div class="field">
		<label><?= @text('Office')?>:</label><br>
		<?= @helper('listbox.offices', array('name' => 'openhouse_office_id')) ?>
	</div>
	
	<div class="field">
		<label><?= @text('Company')?>:</label><br>
		<?= @helper('listbox.companies', array('name' => 'openhouse_company_id')) ?>
	</div>
	
	<div class="actions">
		<button>Submit</button>
		<a href="<?= @route('view=agent&id='. $agent->id) ?>" class="button">Done</a>
	</div>
</form>