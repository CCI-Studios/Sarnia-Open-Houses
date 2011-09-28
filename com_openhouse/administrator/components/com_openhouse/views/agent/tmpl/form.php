<? defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route('id='. $agent->id) ?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>Agent Details</legend>
			
			<ul class="adminformlist">
				<li>
					<label>Name</label>
					<input type="text" name="name" class="inputbox" value="<?= $agent->name ?>" />
				</li>
				
				<li>
					<label>Title</label>
					<input type="text" name="title" class="inputbox" value="<?= $agent->title ?>" />
				</li>
				
				<li>
					<label>Phone</label>
					<input type="text" name="phone" class="inputbox" value="<?= $agent->phone ?>" />
				</li>
				
				<li>
					<label>Website</label>
					<input type="text" name="website" class="inputbox" value="<?= $agent->website ?>" />
				</li>
				
				<li>
					<label>Email</label>
					<input type="text" name="email" class="inputbox" value="<?= $agent->email ?>" />
				</li>
			</ul>
		</fieldset>
	</div>
</form>
