<? defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route('id='. $office->id) ?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>Office Settings</legend>

			<ul class="adminformlist">
				<li>
					<label>Title</label>
					<input type="text" name="title" class="inputbox" value="<?= $office->title ?>" />
				</li>
			</ul>
		</fieldset>
	</div>
</form>
