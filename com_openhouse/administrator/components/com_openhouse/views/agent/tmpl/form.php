<? defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route('id='. $agent->id) ?>" method="post" class="-koowa-form" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
	
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>Agent Details</legend>
			
			<ul class="adminformlist">
				<li>
					<label for="field_name"><?= @text('Name') ?>:</label>
					<input type="text" id="field_name" name="name" value="<?= $agent->name ?>" />
				</li>

				<li>
					<label for="field_title"><?= @text('Title') ?>:</label>
					<?= @helper('listbox.repTitles', array('selected' => $agent->title, 'name' => 'title')) ?>
				</li>

				<li>
					<label><?= @text('Company')?>:</label>
					<?= @helper('listbox.companies', array('name' => 'openhouse_company_id')) ?>
				</li>

				<li>
					<label for="field_office_phone"><?= @text('Office Phone Number') ?>:</label>
					<input type="text" id="field_office_phone" name="office_phone" value="<?= $agent->office_phone ?>" />
				</li>

				<li>
					<label for="field_cell_phone"><?= @text('Cell Phone Number') ?>:</label>
					<input type="text" id="field_cell_phone" name="cell_phone" value="<?= $agent->cell_phone ?>" />
				</li>

				<li>
					<label for="field_email"><?= @text('Email Address') ?>:</label>
					<input type="text" id="field_email" name="email" value="<?= $agent->email ?>" />
				</li>
			</ul>
		</fieldset>
	</div>
	
	<div class="width-40 fltrt">
		<fieldset class="adminform">
			<legend>Profile Picture</legend>
			
			<ul class="adminformlist">
				<? if ($agent->picture): ?>
				<li>
					<img src="/media/com_openhouse/uploads/agents/<?= $agent->picture ?>" />
				</li>
				<? endif; ?>
				<li>
					<label><?= @text('Profile Picture') ?>:</label>
					<input type="file" name="fileupload" />
				</li>
				<li style="clear: both">
					Images will be automatically resized to 193 pixels wide and should be under 2 megabytes in size.<br/>
					Images must be jpeg files.
				</li>
			</ul>
		</fieldset>
	</div>
</form>
