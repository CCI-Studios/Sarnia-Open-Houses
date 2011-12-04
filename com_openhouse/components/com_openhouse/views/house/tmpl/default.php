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


		<p><?= $house->address .', '. $house->getFullLocation() ?></p>
		<p><a href="#" target="_blank" class="button"><span>Take a Virtual Tour</span></a></p>
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
			<table width="300px">
				<tbody>
					<? foreach ($house->showings as $showing): ?>
					<tr>
						<td><?= @format('named_date', $showing->start_date); ?></td>
						<td><?= $showing->hours; ?></td>
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

			<? if (JFactory::getUser()->guest !== 1): ?>
			<p>
				<div class="button add_to_cart" data-id="<?= $house->id ?>" data-token="<?= JUtility::getToken() ?>">
					<span>Add to cart</span>
				</div>
			</p>
			<? endif; ?>
		</div>
	</div>

	<div class="padded">
		<p><a href="<?= @route('view=houses'); ?>" class="button"><span>Do a Custom Search</span></a></p>
	</div>
</div>