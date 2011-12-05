<h2>Updating Profile for <?= $user->name ?></h2>

<form action="<?= @route('view=profile&id='. $profile->id)?>" method="post" class="-koowa-form">
	<table class="form">
		<tr>
			<td align="right"><label for="min_price_field">Min Price:</label></td>
			<td><input type="text" name="min_price" class="inputbox" value="<?= $profile->min_price ?>"></td>
		</td>
		
		<tr>
			<td align="right"><label for="max_price_field">Max Price:</label></td>
			<td><input type="text" name="max_price" class="inputbox" value="<?= $profile->max_price ?>"></td>
		</td>
		
		<tr>
			<td align="right"><label for="city_field">City:</label></td>
			<td><?= @helper('listbox.locations', array('name' => 'city', 'value'=>'title', 'selected' => $profile->city)) ?></td>
		</td>
		
		<tr>
			<td align="right"><label for="province_field">Province:</label></td>
			<td><?= @helper('listbox.provinces', array('name' => 'province', 'selected' => $profile->province)) ?></td>
		</td>
		
		<tr>
			<td align="right"><label for="notifications_field">Notifications:</label></td>
			<td><?= @helper('select.booleanlist', array('selected' => $profile->notifications, 'name' => 'notifications')) ?></td>
		</tr>
		
		<tr>
			<td width="150">&nbsp;</td>
			<td><button><span>Save</span></button> or <a class="button" href="<?= @route('view=profile') ?>"><span>Go To Profile</span></a></td>
		</tr>
	</table>
</form>