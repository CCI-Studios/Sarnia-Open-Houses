<style src="media://com_openhouse/css/openhouse.css" />

<ul class="openhouse-listings">
	<? foreach ($houses as $house): ?>
		<li class="gradient">
			<div class="image"><div>
				<? if (count($house->images)): ?>
					<img 
						src="media://com_openhouse/uploads/large/<?= $house->images->current()->filename ?>"
						width="275"
						height="183" />
				<? else: ?>
					<img
						src="media://com_openhouse/images/placeholder.jpg"
						width="275"
						height="183" />
				<?  endif; ?>
			
				<div class="price"><span><span>
					<?= @helper('format.price', array('value' => $house->price)) ?>
				</span></span></div>
			</div></div>
		
			<div class="description">
				<h2><?= $house->address ?><br />
					<small>
						<?= $house->city .', '. $house->province ?><br/>
						<span class="showings">
							<?= date('l F j, g:ia', strtotime($house->upcoming)) ?>
							- <?= date('g:ia', strtotime($house->showings->current()->end_time)) ?>
						</span>
					</small>
				</h2>
				<p><?= str_replace("\n\n", "</p><p>", substr($house->description, 0, 150)) ?>...</p>
				<div class="center">
					<a href="<?= @route('view=house&id='. $house->id) ?>" class="button"><span>View Listing</span></a>
					<?= KService::get('com://site/openhouse.controller.cart')
							->view('cart')
							->layout('form')
							->houseID($house->id)
							->display(); ?>
				</div>
			</div>
			<div class="clear"></div>
		</li>
	<? endforeach; ?>
	
	<? if (!count($houses)): ?>
	<li class="gradient">
		<p>There are no houses available that match your request.</p>
	</li>
	<? endif; ?>
</ul>

