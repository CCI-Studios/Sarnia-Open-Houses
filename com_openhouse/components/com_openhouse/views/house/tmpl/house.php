<table>
	<tr>
		<td>Address:</td>
		<td>
			<? echo ($house->address)? $house->address .'<br />' : '' ?>
			<? echo ($house->city)? $house->city .'<br />' : '' ?>
			<? echo ($house->postal)? $house->postal .'<br />' : '' ?>
		</td>
	</tr>
	
	<? if ($house->price): ?><tr>
		<td>Price:</td>
		<td>$<?= $house->price ?></td>
	</tr><? endif; ?>
	
	<? if ($house->price): ?><tr>
		<td>Bathrooms:</td>
		<td><?= $house->bathrooms ?></td>
	</tr><? endif; ?>

	<? if ($house->price): ?><tr>
		<td>Bedrooms:</td>
	 	<td><?= $house->bedrooms ?></td>
	</tr><? endif; ?>
</table>