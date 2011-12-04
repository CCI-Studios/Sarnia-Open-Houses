<p class="center">
	<? if ($agent->picture): ?>
		<img 
			class="bordered" 
			src="/media/com_openhouse/uploads/agents/<?= $agent->picture ?>" />
		<br/><br/>
	<? endif; ?>

	<strong><?= $agent->name ?></strong><br/>
	<?= $agent->phone ?><br/>
	<a href="mailto:<?= $agent->email ?>"><?= $agent->email ?></a>
</p>