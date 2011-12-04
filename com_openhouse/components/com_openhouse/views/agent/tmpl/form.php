<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_openhouse/css/openhouse.css" />

<div>
	<h2>Editing <?= $agent->name ?>'s Profile</h2>

	<form action="<?= @route('view=agent&id='. $agent->id) ?>" method="post" class="-koowa-form">
		<table class="form">
			<tr>
				<td align="right"><label for="field_name"><?= @text('Name') ?>:</label></td>
				<td><input type="text" id="field_name" name="name" value="<?= $agent->name ?>" /></td>
			</tr>
		
			<tr>
				<td align="right"><label for="field_title"><?= @text('Title') ?>:</label></td>
				<td><input type="text" id="field_title" name="title" value="<?= $agent->title ?>" /></td>
			</div>
		
			<tr>
				<td align="right"><label for="field_phone"><?= @text('Phone Number') ?>:</label></td>
				<td><input type="text" id="field_phone" name="phone" value="<?= $agent->phone ?>" /></td>
			</tr>
		
			<tr>
				<td align="right"><label for="field_website"><?= @text('Website Address') ?>:</label></td>
				<td><input type="text" id="field_website" name="website" value="<?= $agent->website ?>" /></td>
			</tr>
		
			<tr>
				<td align="right"><label for="field_email"><?= @text('Email Address') ?>:</label></td>
				<td><input type="text" id="field_email" name="email" value="<?= $agent->email ?>" /></td>
			</tr>
		
			<tr>
				<td align="right"><label><?= @text('Company')?>:</label></td>
				<td><?= @helper('listbox.companies', array('name' => 'openhouse_company_id')) ?></td>
			</tr>
			
			<tr>
				<td align="right"><label><?= @text('Office')?>:</label></td>
				<td><?= @helper('listbox.offices', array('name' => 'openhouse_office_id')) ?></td>
			</tr>
	
			<!--<div class="field"> FIXME upload profile pic
				<label><?= @text('Upload new profile picture') ?>:</label><br>
				<input type="file" name="profile_upload" />
			</div>-->
	
			<tr class="actions">
				<td width="100">&nbsp;</td>
				<td>
					<button><span>Submit</span></button>
					<a href="<?= @route('view=agent&id='. $agent->id) ?>" class="button"><span>Done</span></a>
				</td>
			</tr>
		</table>
		
	</form>
</div>