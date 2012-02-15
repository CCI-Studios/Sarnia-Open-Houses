<style src="media://com_openhouse/css/openhouse.css" />
<script src="media://com_openhouse/js/dotter.js" />
<script src="media://com_openhouse/js/handlers.js" />

<module title="" position="sidebar">
	<?= @template('com://site/openhouse.view.agent.module', array(
		'agent'	=> $house->agent
	)) ?>
</module>

<? if ($house->isOwnable() && $house->canEdit()): ?>
<module title="What's Next" position="sidebar" params="moduleclass_sfx= important">
	<p>Now that you've created your house listing, what's next?</p>
	<ul>
		<li><a href="<?= @route('view=house&layout=form&id='. $house->id) ?>">Edit your listing details</a></li>
		<li><a href="<?= @route('view=images&openhouse_house_id='. $house->id) ?>">Edit your Photos</a></li>
		<li><a href="<?= @route('view=showing&openhouse_house_id='. $house->id) ?>">Schedule your open house</a></li>
	</ul>
	<p>Please note, your listing will not appear on the site unless you have at least
		one open house date that has not passed.</p>
</module>
<? endif; ?>

<div class="com_openhouse">
	<div class="padded clearfix">
		<h1 class="house-address">
			<?= $house->address ?><br>
			<small>
				<?= $house->getFullLocation() ?>
				<? if ($house->isOwnable() && $house->canEdit()): ?>
					- <a href="<?= @route('view=house&layout=form&id='. $house->id) ?>">Edit Listing</a>
					- <a href="<?= @route('view=images&openhouse_house_id='. $house->id) ?>">Edit Photos</a>
				<? endif; ?>
			</small>
		</h1>

		<?= @template('com://site/openhouse.view.images.gallery', array(
			'images'	=> $house->images,
			'price'		=> $house->price
		)) ?>
	</div>
	
	<div class="gradient padded clearfix">
		<h2>Dates</h2>

		<div class="map right bordered">
			<?= @template('default_map') ?>
		</div>

		<div class="left">
			<table style="width:300px;" class="showings">
				<tbody>
					<? if (count($house->showings) === 0): ?>
					<tr>
						<td>There are currently no open house dates.</td>
					</tr>
					<? endif; ?>
				
					<? foreach ($house->showings as $showing): ?>
					<tr>
						<td>
							<?= @format('named_date', $showing->start_date); ?>
						</td>
						<td><?= 
							strftime('%l:%M:%P', strtotime($showing->start_time))
							.' - '.
							strftime('%l:%M:%P', strtotime($showing->end_time))
						?></td>
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
							<a class="button" href="<?= @route('view=showing&openhouse_house_id='. $house->id) ?>"><span>
								Schedule your open house
							</span></a>
						</td>
					</tr>
				</tfoot>
				<? endif; ?>
			</table>

			
			<p>
				<? if (false): ?>
					<? if ($allow_waypoint): ?>
						<? if ($has_waypoint): ?>
							<div class="button disabled"><span>House is already bookmarked</span></div>
						<? else: ?>
							<div class="button add_to_cart" data-id="<?= $house->id ?>" data-token="<?= JUtility::getToken() ?>">
								<span>Bookmark house</span>
							</div>
						<? endif; ?>
					<?  else: ?>
						<a href="<?= @route('option=com_users&view=registration') ?>" class="button">
							<span>Create a profile to get directions</span>
						</a>
					<? endif; ?>
				<? endif; ?>
			</p>
		</div>
	</div>
	
	<div class="padded gradient clearfix">
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

	<div class="padded">
		<p><a href="<?= @route('view=houses'); ?>" class="button"><span>Do a Custom Search</span></a></p>
	</div>
</div>