<?php

class ComOpenhouseControllerImage extends ComDefaultControllerDefault
{

	protected function _actionResize(KCommandContext $context)
	{
		$model = $this->getService('com://admin/openhouse.model.images');
		$images = $model->getList();

		foreach ($images as $image) {
			$image->deleteThumbs();
			$image->createThumbs();
		}

		JFactory::getApplication()->enqueueMessage('Done resizing images.');
	}

}