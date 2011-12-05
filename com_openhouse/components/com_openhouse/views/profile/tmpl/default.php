<h2>Profile for <?= $user->name ?></h2>

<p>You currently will <?= ($profile->notifications)? '' : 'not' ?> receive daily notifications.</p>
<? if ($profile->min_price): ?>
	<p>Your minimum price is <?= @format('price', $profile->min_price) ?></p>
<? endif; ?>
<? if ($profile->max_price): ?>
	<p>Your maximum price is <?= @format('price', $profile->max_price) ?></p>
<? endif; ?>
<? if ($profile->city): ?>
	<p>You are looking for houses is <?= $profile->city?>, <?= $profile->province ?></p>
<? endif; ?>

<p><a href="<?= @route('view=profile&layout=form')?>">Update your profile</a></p>
