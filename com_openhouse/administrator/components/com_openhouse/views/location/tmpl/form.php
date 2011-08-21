<? defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route('id='. $location->id) ?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>Location Settings</legend>
			
			<ul class="adminformlist">
				<li>
					<label>Title</label>
					<input type="text" name="title" class="inputbox" value="<?= $location->title ?>" />
				</li>
			</ul>
		</fieldset>
	</div>
</form>
