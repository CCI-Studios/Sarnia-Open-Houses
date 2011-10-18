<style src="media://com_openhouse/css/openhouse.css" />

<h2>
	<?= $house->address ?>
	<? if ($house->isOwnable() && $house->canEdit()): ?>
		<small> - <a href="<?= @route('view=house&layout=form&id='. $house->id) ?>">Edit Listing</a></small>
	<? endif; ?>
</h2>


<?= @service('com://site/openhouse.controller.images')
		->house_id($house->id)
		->layout('gallery')
		->display(); ?>

<? if ($house->description): ?>
	<h3>Description</h3>
	<?= $house->description ?>
<? endif; ?>


<h3>Details</h3>
<?= @template('house')?>
<div class="clear"></div>


<h3>Showing Dates</h3>
<?= @service('com://site/openhouse.controller.showings')
		->house_id($house->id)
		->layout('list')
		->display() ?>
		
<?= @template('default_map') ?>

<p><a href="#" class="button"><span>Add to cart</span></a></p>