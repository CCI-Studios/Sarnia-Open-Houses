<? defined('KOOWA') or die; ?>

<? if ($searching): ?>
	<h1>Search</h1>
	<?= @template('default_search') ?>
<? else: ?>
	<h1>Search Results</h1>
	<?= @template('default_results') ?>
<? endif; ?>