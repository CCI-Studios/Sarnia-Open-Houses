<style src="media://com_openhouse/css/openhouse.css" />
<script src="media://com_openhouse/js/dotter.js" />
<script src="media://com_openhouse/js/handlers.js" />

<div>
	<? foreach($waypoints as $wp): ?>
	<div class="gradient">
		<?= @template('com://site/openhouse.view.house.item', array('house'=>$wp->house)); ?>
		
		<form action="<?= @route('view=waypoint&id='. $wp->id) ?>" method="post" class="-koowa-form">
			<input type="hidden" name="action" value="delete" />
			
			<button><span>Remove</span></button>	
		</form> 
		
	</div>
	<? endforeach; ?>

	<div class="clear"></div>
</div>