<style src="media://com_openhouse/css/openhouse.css" />

<ul class="openhouse-listings"><? foreach ($houses as $house): ?>
	<li class="gradient">
		<div class="image"><div>
			<? if (count($house->images)): ?>
				<img 
					src="media://com_openhouse/uploads/large/<?= $house->images->current()->filename ?>"
					width="275"
					height="129" />
			<? else: ?>
				<img
					src="media://com_openhouse/images/placeholder.jpg"
					width="275"
					height="129" />
			<?  endif; ?>
			
			<div class="price"><span><span>
				<?= @format('price', $house->price) ?>
			</span></span></div>
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