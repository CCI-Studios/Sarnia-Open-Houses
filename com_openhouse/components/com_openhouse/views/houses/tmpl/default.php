<? defined('KOOWA') or die; ?>

<section class="openhouse-houses clearfix">
	<? if ($show_page_title): ?>
		<h2><?= $page_title ?></h2>
	<? endif; ?>
	
	<? if ($show_search): ?>
		<?= @template('default_search'); ?>
	<? endif; ?>

	<?= @template('default_results'); ?>

	<? if ($show_pagination || $show_custom_search): ?>
	<footer>
		<? if ($show_pagination): ?>
			<?= @template('default_pagination'); ?>
		<? endif; ?>
		<? if ($show_custom_search): ?>
			<a href="<?= @route('view=houses') ?>" class="button"><span>Do Custom Search</span></a>
		<? endif; ?>
	</footer>
	<? endif; ?>
</section>