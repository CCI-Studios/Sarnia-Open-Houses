<style src="media://com_openhouse/css/openhouse.css" />

<section>
	<img class="profile-picture fltrgt" width="150" height="200" src="http://dummyimage.com/150x200/ddd/333.jpg&amp;text=Profile" />
	
	<h1><?= @escape($agent->name) ?></h1>
	<?= $agent->title ?><br/>	
	<? if ($agent->canEdit()): ?>
		<a href="<?= @route('view=agent&layout=form&id='. $agent->id) ?>">Update profile</a><Br/>
	<? endif; ?>

<div class="padded gradient clearfix">
	<h1><?= @escape($agent->name) ?></h1>
	
	<img class="profile-picture bordered" width="193" height="193" src="http://dummyimage.com/193x193/ddd/333.jpg&amp;text=Profile" />
	
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

	<?= @service('com://site/openhouse.controller.house')
			->openhouse_agent_id(49)
			->sort('address')
			->layout('list')
			->display(); ?>


	<? if ($valid): ?>
		<p><a href="<?= @route('view=house&layout=form') ?>">Add new house listing</a></p>
	<? else: ?>
		<p>You must <a href="<?= @route('view=agent&layout=form&id='. $agent->id) ?>">complete you profile</a> before creating a new listing.</p>
	<? endif; ?>
</div>