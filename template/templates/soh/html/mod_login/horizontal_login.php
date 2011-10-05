<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form" >

	<div class="left">
		<label for="modlgn-username"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?></label>
		<input id="modlgn-username" type="text" name="username" class="inputbox"  size="18" />
	</div>
	<div class="left">
		<label for="modlgn-passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
		
		<div>
			<input id="modlgn-passwd" type="password" name="password" class="inputbox" size="18"  /><br/>
		
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
		</div>
	</div>
	<div class="left">
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGIN') ?>" />
	</div>
	<div class="left">
		<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
			<?php echo JText::_('MOD_LOGIN_REGISTER'); ?></a>
	</div>

	
	
	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHtml::_('form.token'); ?>

</form>