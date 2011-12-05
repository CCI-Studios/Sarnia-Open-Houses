<style src="media://com_openhouse/css/openhouse.css" />
<script src="media://com_openhouse/js/dotter.js" />
<script src="media://com_openhouse/js/handlers.js" />


<module title="" position="sidebar">
	<?= @template('com://site/openhouse.view.agent.module', array(
		'agent'	=> $house->agent
	)) ?>
</module>

<div class="com_openhouse">
	<div class="padded gradient clearfix">
		<h1 class="house-address">
			<?= $house->address ?><br>
			<small>
				<?= $house->getFullLocation() ?>
				<? if ($house->isOwnable() && $house->canEdit()): ?>
					- <a href="<?= @route('view=house&layout=form&id='. $house->id) ?>">Edit Listing</a>
				<? endif; ?>
			</small>
		</h1>

		<?= @template('com://site/openhouse.view.images.gallery', array(
			'images'	=> $house->images,
			'price'		=> $house->price
		)) ?>
		<? if ($house->isOwnable() && $house->canEdit()): ?>
			<p><a href="<?= @route('view=images&openhouse_house_id='. $house->id) ?>">Edit Gallery</a></p>
		<? endif; ?>

		<p><?= $house->address .', '. $house->getFullLocation() ?></p>
		<? if ($house->virtual_link): ?>
			<p><a href="<?= str_replace('http://http://', 'http://', 'http://'.$house->virtual_link) ?>" target="_blank" class="button">
				<span>Take a Virtual Tour</span></a>
			</p>
		<? endif; ?>
		<div class="details">
			Price: <?= $house->getPrice() ?><br>
			Bedrooms: <?= $house->bedrooms ?><br>
			Bathrooms: <?= $house->bathrooms ?>
		</div>

		<div class="description">
			<p><?= str_replace("\n", "<br/>", str_replace("\n\n", "</p><p>", $house->description)) ?></p>
		</div>
	</div>

	<div class="gradient padded clearfix">
		<h2>Dates</h2>

		<div class="map right bordered">
			<?= @template('default_map') ?>
		</div>

		<div class="left">
			<table style="width:300px;">
				<tbody>
					<? if (count($house->showings) === 0): ?>
					<tr>
						<td>There are currently no showings dates.</td>
					</tr>
					<? endif; ?>
				
					<? foreach ($house->showings as $showing): ?>
					<tr>
						<td><?= @format('named_date', $showing->start_date); ?></td>
						<td><?= $showing->hours; ?></td>
						<?  if ($house->isOwnable() && $house->canEdit()): ?>
							<td>
							<form action="<?= @route('view=showing&id='. $showing->id) ?>" method="post" class="-koowa-form">
								<input type="hidden" name="action" value="delete" />
								<button type="submit" class="plain">Delete</button>
							</form>
							</td>
						<?  endif; ?>
					</tr>
					<? endforeach; ?>
				</tbody>

				<? if ($house->isOwnable() && $house->canEdit()): ?>
				<tfoot>
					<tr>
						<td colspan="2">
							<a href="<?= @route('view=showing&openhouse_house_id='. $house->id) ?>">
								Add New Listing
							</a>
						</td>
					</tr>
				</tfoot>
				<? endif; ?>
			</table>

			
			<p>
				<? if ($allow_waypoint): ?>
					<? if ($has_waypoint): ?>
						<div class="button disabled"><span>House is already in cart</span></div>
					<? else: ?>
						<div class="button add_to_cart" data-id="<?= $house->id ?>" data-token="<?= JUtility::getToken() ?>">
							<span>Add to cart</span>
						</div>
					<? endif; ?>
				<?  else: ?>
					<a class="button"><span>Register to add directions</span></a>
				<? endif; ?>
			</p>
		</div>
	</div>

	<div class="padded">
		<p><a href="<?= @route('view=houses'); ?>" class="button"><span>Do a Custom Search</span></a></p>
	</div>
</div>