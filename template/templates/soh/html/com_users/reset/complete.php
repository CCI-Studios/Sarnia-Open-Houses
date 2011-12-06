<?php
/**
 * @version		$Id: complete.php 22338 2011-11-04 17:24:53Z github_bot $
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
//JHtml::_('behavior.formvalidation');
?>
<div class="reset-complete<?php echo $this->pageclass_sfx?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>

	<form action="<?php echo JRoute::_('index.php?option=com_users&task=reset.complete'); ?>" method="post" class="form-validate">
		<?php echo JHtml::_('form.token'); ?>
		
		<table>
			<?php foreach ($this->form->getFieldsets() as $fieldset): ?>
				<tr>
					<td colspan="2">
						<p><?php echo JText::_($fieldset->label); ?></p>
					</td>
				</tr>
				
				<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field): ?>
					<tr>
						<td align="right"><?php echo $field->label; ?></td>
						<td><?php echo $field->input; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endforeach; ?>
		
			<tr>
				<td width="200">&nbsp;</td>
				<td>
					<button type="submit" class="validate"><span>
						<?php echo JText::_('JSUBMIT'); ?>
					</span></button>
				</td>
			</tr>
		</table>
	</form>
</div>
