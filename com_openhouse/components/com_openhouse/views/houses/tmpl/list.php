<ul>
	<? foreach ($houses as $house): ?>
		<li>
			<?= @template('site::com.openhouse.view.house.item', array('house' => $house)) ?>
		</li>
	<? endforeach; ?>
</ul>