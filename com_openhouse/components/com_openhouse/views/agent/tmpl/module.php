<p class="center">
	<? if ($agent->picture): ?>
		<img 
			class="bordered" 
			src="/media/com_openhouse/uploads/agents/<?= $agent->picture ?>" />
		<br/><br/>
	<? endif; ?>

	<strong><?= $agent->name ?></strong><br/>
	<strong><?= $agent->title ?></strong><br/>
	<?= $agent->company->title ?><br/>
	Office Number: <?= $agent->office_phone ?><br/>
	<?= $agent->cell_phone ? "Cell Number: {$agent->cell_phone}<br/>" : "" ?>
	<a href="mailto:<?= $agent->email ?>"><?= $agent->email ?></a>
</p>