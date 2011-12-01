<style src="media://com_openhouse/css/openhouse.css" />

<ul class="openhouse-listings"><? foreach ($houses as $house): ?>
	<li class="gradient">
		<div class="image"><div>
			<img src="images/default/home.png" />
			
			<div class="price"><span>
				$<?= $house->price ?>
			</span></div>
		</div></div>
		
		<div class="description">
			<h2><?= $house->address ?><br />
				<small><?= $house->city .', '. $house->province ?></small></h2>
			<p><?= str_replace("\n\n", "</p><p>", substr($house->description, 0, 150)) ?>...</p>
			<div class="center">
				<a href="<?= @route('view=house&id='. $house->id) ?>" class="button"><span>View Listing</span></a>
			</div>
		</div>
		<div class="clear"></div>
	</li>
<? endforeach; ?></ul>