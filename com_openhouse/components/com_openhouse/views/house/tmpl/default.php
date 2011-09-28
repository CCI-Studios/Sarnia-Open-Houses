<style src="media://com_openhouse/css/openhouse.css" />

<h2>
	<?= $house->address ?>
	<? if ($house->isOwnable() && $house->canEdit()): ?>
		<small> - <a href="<?= @route('view=house&layout=form&id='. $house->id) ?>">Edit Listing</a></small>
	<? endif; ?>
</h2>

<div class="gallery">
	<div class="current">
		<img src="http://dummyimage.com/505x214/ddd/333.jpg&amp;text=Main%20Picture" width="100%" />
	</div>
	<ul>
		<li><img src="http://dummyimage.com/70x30/ddd/333.jpg&amp;text=Thumb" width="70" height="30" /></li>
		<li><img src="http://dummyimage.com/70x30/ddd/333.jpg&amp;text=Thumb" width="70" height="30" /></li>
		<li><img src="http://dummyimage.com/70x30/ddd/333.jpg&amp;text=Thumb" width="70" height="30" /></li>
		<li><img src="http://dummyimage.com/70x30/ddd/333.jpg&amp;text=Thumb" width="70" height="30" /></li>
		<li><img src="http://dummyimage.com/70x30/ddd/333.jpg&amp;text=Thumb" width="70" height="30" /></li>
		<li><img src="http://dummyimage.com/70x30/ddd/333.jpg&amp;text=Thumb" width="70" height="30" /></li>
		<li><img src="http://dummyimage.com/70x30/ddd/333.jpg&amp;text=Thumb" width="70" height="30" /></li>
	</ul>
</div>

<? if ($house->description): ?>
	<h3>Description</h3>
	<?= $house->description ?>
<? endif; ?>


<h3>Details</h3>
<dl class="data-set">
	<dt>Address:</dt>
	<dd>
		<? echo ($house->address)? $house->address .'<br />' : '' ?>
		<? echo ($house->city)? $house->city .'<br />' : '' ?>
		<? echo ($house->postal)? $house->postal .'<br />' : '' ?>
	</dd>
	
	<? if ($house->price): ?>
		<dt>Price:</dt>
		<dd>$<?= $house->price ?></dd>
	<? endif; ?>
	
	<? if ($house->price): ?>
		<dt>Bathrooms:</dt>
		<dd><?= $house->bathrooms ?></dd>
	<? endif; ?>

	<? if ($house->price): ?>	
		<dt>Bedrooms:</dt>
		<dd><?= $house->bedrooms ?></dd>
	<? endif; ?>
</dl>
<div class="clear"></div>


<h3>Showing Dates</h3>
<p><a href="#" class="button">Add to card</a></p>