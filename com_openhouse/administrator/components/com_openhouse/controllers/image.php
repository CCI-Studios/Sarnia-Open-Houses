<?php

class ComOpenhouseControllerImage extends ComDefaultControllerDefault
{

	protected function _actionResize(KCommandContext $context)
	{
		set_time_limit(500);
		
		$model = $this->getService('com://admin/openhouse.model.images');
		$images = $model->getList();

		foreach ($images as $image) {
			$image->deleteThumbs();
			$image->createThumbs();
		}

		JFactory::getApplication()->enqueueMessage('Done resizing images.');
	}

}