<? defined('KOOWA') or die; ?>

<? if ($show_page_title): ?>
	<h1><?= $page_title ?></h1>
<? endif; ?>

<? if ($show_search): ?>
	<?= @template('default_search'); ?>
<? endif; ?>

<?= @template('default_results'); ?>

<? if ($show_pagination || $show_custom_search): ?>
<div class="padded">
	<?= @template('default_pagination'); ?>
	<a href="<?= @route('view=houses') ?>" class="button"><span>Do Custom Search</span></a>
</div>
<? endif; ?>