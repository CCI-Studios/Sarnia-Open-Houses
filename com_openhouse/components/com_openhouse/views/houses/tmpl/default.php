<? defined('KOOWA') or die; ?>

<? if ($show_page_title): ?>
	<h1><?= $page_title ?></h1>
<? endif; ?>

<? if ($show_search): ?>
	<?= @template('default_search'); ?>
<? endif; ?>

<?= @template('default_results'); ?>

<? if ($show_pagination): ?>
	<?= @template('default_pagination'); ?>
<? endif; ?>