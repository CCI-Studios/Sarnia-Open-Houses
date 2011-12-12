<?php
/**
 * @version		$Id: default.php 21543 2011-06-15 22:48:00Z chdemko $
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.6
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
//JHtml::_('behavior.formvalidation');
?>
<div class="registration<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
	<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
<?php endif; ?>
<h2>New User Registration</h2>

	<p>Your user profile details will be secure within the website and will NOT be used for soliciting purposes.</p>

	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate">
<?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
	<?php $fields = $this->form->getFieldset($fieldset->name);?>
	<?php if (count($fields)):?>
		<table>
		<?php foreach($fields as $field):// Iterate through the fields in the set and display them.?>
			<tr>
				<?php if ($field->hidden):// If the field is hidden, just display the input.?>
					<td colspan="2"><?php echo $field->input;?></td>
				<?php else:?>
					<td width="150" align="right"><?php echo $field->label; ?></td>
					<td>
						<?php if (!$field->required && $field->type != 'Spacer'): ?>
							<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL');?></span>
						<?php endif; ?>
					
						<?php echo $field->input; ?>
					</td>
				<?php endif;?>
		<?php endforeach;?>
		
			<tr>
				<td>&nbsp;</td>
				<td>
					<button type="submit" class="validate"><span>
						<?php echo JText::_('JREGISTER');?>
					</span></button>

					<?php echo JText::_('COM_USERS_OR');?>

					<a class="button" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><span>
						<?php echo JText::_('JCANCEL');?>
					</span></a>
				</td>
			</tr>
		
		</table>
	<?php endif;?>
<?php endforeach;?>
		<div>
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="registration.register" />
			<?php echo JHtml::_('form.token');?>
		</div>
	</form>
</div>
