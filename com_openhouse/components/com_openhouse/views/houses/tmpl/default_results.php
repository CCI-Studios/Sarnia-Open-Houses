<style src="media://com_openhouse/css/openhouse.css" />

<ul class="openhouse-listings"><? foreach ($houses as $house): ?>
	<li>
		<div class="image"><div>
			<img src="images/default/home.png" />
			
			<div class="price"><span>
				$<?= $house->price ?>
			</span></div>
		</div></div>
		
		<div class="description">
			<h2><?= $house->address ?><br />
				<small>Sarnia, Ontario</small></h2>
			<?= $house->description ?>
			<a href="<?= @route('view=house&id='. $house->id) ?>" class="button"><span>View Listing</span></a>
		</div>
		<div class="clear"></div>
	</li>
<? endforeach; ?></ul>