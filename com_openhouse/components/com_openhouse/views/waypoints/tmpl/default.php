<style src="media://com_openhouse/css/openhouse.css" />
<script src="media://com_openhouse/js/dotter.js" />
<script src="media://com_openhouse/js/handlers.js" />

<div>
	<? foreach($waypoints as $wp): ?>
	<div class="padded gradient">
		<?= @template('com://site/openhouse.view.house.item', array('house'=>$wp->house)); ?>
		<p class="remove_from_cart button"><span>Remove</span></p>
	</div>
	<? endforeach; ?>

	<div class="clear"></div>
</div>