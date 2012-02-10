<?php

class ComOpenHouseDatabaseRowImage extends ComOpenhouseDatabaseRowRelated
{

	public function __construct(KConfig $config = null)
	{
		parent::__construct($config);

		$this->belongs_to('house');
	}
	
	/**
	 * Delete saved images when deleting row data.
	 * 
	 * @see KDatabaseRowTable::delete()
	 */
	public function delete()
	{
		$this->deleteImages();
		return parent::delete();
	}
	
	protected function deleteImages()
	{
		jimport('joomla.filesystem.file');
		$path = JPATH_SITE.DS.'media/com_openhouse/uploads/';
		
		if (JFile::exists($path .'full/'. $this->filename)) {
			JFile::delete($path .'full/'. $this->filename);
		}
		
		if (JFile::exists($path .'large/'. $this->filename)) {
			JFile::delete($path .'large/'. $this->filename);
		}
		
		if (JFile::exists($path .'small/'. $this->filename)) {
			JFile::delete($path .'small/'. $this->filename);
		}
	}
	
	public function save()
	{
		$f = $this->saveImages();
		if ($f) {
			$this->filename = $f;
			return parent::save();
		}

		return;
	}
	
	protected function saveImages()
	{
		jimport('joomla.filesystem.file');
		jimport('joomla.filesystem.folder');
	
		$field = "fileupload";
		$path = JPATH_SITE.DS.'media/com_openhouse/uploads/';
		$valid = array('jpeg', 'jpg');
		
		if (!isset($_FILES[$field])) {
			return;
		}
	
		$upload = $_FILES[$field];
		$extension = strtolower(end(explode('.', $upload['name'])));
		
		if ($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png') {
			JFactory::getApplication()->enqueueMessage('That image is not valid. Please upload an image file.');
			return false;
		} elseif ($upload['error'] == UPLOAD_ERR_NO_FILE) {
			JFactory::getApplication()->enqueueMessage('Please select an image to upload.');
			return false;
		} elseif($upload['error'] == UPLOAD_ERR_FORM_SIZE || $upload['error'] == 1) {			
			JFactory::getApplication()->enqueueMessage('Your image is too large. Please limit to 4 megabytes.');
			return false;
		} elseif($upload['error']) {
			JFactory::getApplication()->enqueueMessage('Image could not be uploaded: error '.$upload['error']);
			return false;
		}
	
		if ($this->picture) {
			$this->deleteImages();
		}
	
		do {
			$filename = 'image-'. $this->openhouse_house_id .'-'. rand(0, 50) .'.jpg';
		} while (JFile::exists($path .'full/'. $filename));
		JFile::upload($upload['tmp_name'], $path .'full/'. $filename);
	
		$this->croppedThumbnail($path .'full/'. $filename, 620, 230, $path .'large/'. $filename);
		$this->croppedThumbnail($path .'full/'. $filename, 27, 27, $path .'small/'. $filename);
		return $filename;
	}
	
	protected function croppedThumbnail($imgSrc, $thumbnail_width, $thumbnail_height, $filename) {
		list($width_orig, $height_orig) = getimagesize($imgSrc);
		$myImage = imagecreatefromjpeg($imgSrc);
		$ratio_orig = $width_orig/$height_orig;
	
		if ($thumbnail_width/$thumbnail_height > $ratio_orig) {
			$new_height = $thumbnail_width/$ratio_orig;
			$new_width = $thumbnail_width;
		} else {
			$new_width = $thumbnail_height*$ratio_orig;
			$new_height = $thumbnail_height;
		}
	
		$x_mid = $new_width/2;  //horizontal middle
		$y_mid = $new_height/2; //vertical middle
	
		$process = imagecreatetruecolor(round($new_width), round($new_height));
	
		imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
		$thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
		imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
	
		imagejpeg($thumb, $filename, 75);
		imagedestroy($process);
		imagedestroy($myImage);
		imagedestroy($thumb);
	}
}