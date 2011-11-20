<style src="media://com_openhouse/css/openhouse.css" />

<section>
	<img class="profile-picture fltrgt" width="150" height="200" src="http://dummyimage.com/150x200/ddd/333.jpg&amp;text=Profile" />
	
	<h1><?= @escape($agent->name) ?></h1>
	<?= $agent->title ?><br/>	
	<? if ($agent->canEdit()): ?>
		<a href="<?= @route('view=agent&layout=form&id='. $agent->id) ?>">Update profile</a><Br/>
	<? endif; ?>

	<dl class="fltlft data-set">
		<? if ($agent->phone): ?>
			<dt><?= @text('Phone Number') ?>:</dt>
			<dd><?= $agent->phone ?></dd>
		<? endif; ?>

		<? if ($agent->website): ?>
			<dt><?= @text('Website') ?>:</dt>
			<dd><a href="<?= $agent->website ?>" target="_blank"><?= $agent->website ?></a></dd>
		<? endif; ?>

		<? if ($agent->email): ?>
			<dt><?= @text('Email') ?>:</dt>
			<dd><a href="mailto:<?= $agent->email ?>"><?= $agent->email ?></a></dd>
		<? endif; ?>
	</dl>
</section>

<section>
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
</section>