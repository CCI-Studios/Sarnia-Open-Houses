<style src="media://com_openhouse/css/openhouse.css" />
<? @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />

<module title="" position="sidebar">
	<?= @template('com://site/openhouse.view.agent.module', array(
		'agent'	=> $agent
	)) ?>
</module>

<div class="gradient">
	<h2><?= @escape($agent->name) ?></h2>

	<p>
		<?= $agent->title ?><br/>
		<? if ($agent->canEdit()): ?>
			<a href="<?= @route('view=agent&layout=form&id='. $agent->id) ?>">Update profile</a><Br/>
		<? endif; ?>
	</p>

	<p>
	<? if ($agent->phone): ?>
		<?= @text('Phone Number') ?>:
		<?= $agent->phone ?>
		<br/>
	<? endif; ?>

	<? if ($agent->website): ?>
		<?= @text('Website') ?>:
		<a href="<?= $agent->website ?>" target="_blank"><?= $agent->website ?></a>
		<br/>
	<? endif; ?>

	<? if ($agent->email): ?>
		<?= @text('Email') ?>:
		<a href="mailto:<?= $agent->email ?>"><?= $agent->email ?></a>
		<br/>
	<? endif; ?>
	</p>
</div>

<div class="padded gradient">
	<h2><?= @text('House Listings') ?></h2>

	<?= @template('com://site/openhouse.view.houses.list', array(
		'houses'	=> $agent->houses,
		'agent'		=> $agent
	)) ?>

	<? if ($valid): ?>
		<p><a href="<?= @route('view=house&layout=form') ?>" class="button"><span>
			Add new house listing
		</span></a></p>
	<? else: ?>
		<p>You must <a href="<?= @route('view=agent&layout=form&id='. $agent->id) ?>">complete you profile</a> before creating a new listing.</p>
	<? endif; ?>
</div>