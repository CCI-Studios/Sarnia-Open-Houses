<div class="pagination">
	<?= @helper('paginator.pagination', array(
		'total' => $total,
		'show_limit' => false,
		'show_count' => false,
		'limit' => $pagination_limit)) ?>
</div>