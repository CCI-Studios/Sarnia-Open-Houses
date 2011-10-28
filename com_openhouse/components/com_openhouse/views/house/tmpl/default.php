<style src="media://com_openhouse/css/openhouse.css" />

<h1 class="house-address">
	<?= $house->address ?><br>
	<small><?= $house->city .', '. $house->location ?></small>
	<? if ($house->isOwnable() && $house->canEdit()): ?>
		<br><small> - <a href="<?= @route('view=house&layout=form&id='. $house->id) ?>">Edit Listing</a></small>
	<? endif; ?>
</h1>


<?= @service('com://site/openhouse.controller.images')
		->house_id($house->id)
		->layout('gallery')
		->display(); ?>
		 
<div class="padded gradient clearfix">
	<p><?= $house->address .', '. $house->city .', '. $house->location ?></p>

	<p><a href="#" target="_blank" class="button"><span>Take a Virtual Tour</span></a></p>

	<? if ($house->description): ?>
	<div class="left" style="width: 80%">
		<?= $house->description ?>
	</div>
	<? endif; ?>
	<div class="left">
		<p>Price: <?= $house->price ?><br>
		Bedrooms: <?= $house->bedrooms ?><br>
		Bathrooms: <?= $house->bathrooms ?></p>
	</div>
</div>

<div class="gradient padded clearfix">
	<h2>Dates</h2>
	
	<div class="left">
		<?= @service('com://site/openhouse.controller.showings')
				->house_id($house->id)
				->layout('list')
				->display() ?>
		<table>
			<tr>
				<td>October 21, 2011</td>
				<td>3:00pm - 8:00pm</td>
			</tr>
			<tr>
				<td>October 22, 2011</td>
				<td>2:00pm - 5:00pm</td>
			</tr>
		</table>
		<p><a href="#" class="button"><span>Add to cart</span></a></p>
	</div>

	<div class="right bordered">
		<?= @template('default_map') ?>
	</div>
</div>

<div class="padded">
	<p><a href="<?= @route('view=houses'); ?>" class="button"><span>Do a Custom Search</span></a></p>
</div>