<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form" >

	<table style="width:100%;">
		<tr>
			<td valign="top">
				<label for="modlgn-username"><?php echo JText::_('Username') ?>:</label>
				<input id="modlgn-username" type="text" name="username" class="inputbox"  size="18" />
			</td>
			<td valign="top">
				<div>
					<label for="modlgn-passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?>:</label>
					<input id="modlgn-passwd" type="password" name="password" class="inputbox" size="18"  />
				</div>
				<div class="center" style="margin-left: 50px;"><a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
					<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a></div>
			</td>
			<td valign="top">
				<button type="submit"><span><?php echo JText::_('Sign In') ?></span></button>
			</td>
			
			<td valign="center">
				or <a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
					<?php echo JText::_('Register Now'); ?></a>
			</td>
		</tr>
	</table>
	
	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHtml::_('form.token'); ?>

</form>