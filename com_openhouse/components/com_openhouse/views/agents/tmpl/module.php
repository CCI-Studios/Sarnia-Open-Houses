<? foreach($agents as $agent): ?>
<div class="center">
	<p><img class="bordered" src="media://com_openhouse/uploads/agents/agent-49.png" /></p>
	
	<h4><?= $agent->name ?></h4>
	<div>
		<?= $agent->phone?><br>
		<a href="mailto:<?= $agent->email ?>"><?= $agent->email ?></a>
	</div>
</div>
<? endforeach; ?>
