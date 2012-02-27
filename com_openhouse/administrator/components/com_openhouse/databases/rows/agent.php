<?php

class ComOpenhouseDatabaseRowAgent extends ComOpenhouseDatabaseRowRelated
{
	public function __construct(KConfig $config = null)
	{
		parent::__construct($config);

		$this->has_many('houses', array(
			'local_key'	=> 'user_id'
		));
		$this->belongs_to('company');
	}
	
	public function save()
	{
		$f = $this->saveImage();
		if ($f) {
			$this->picture = $f;
		}
		
		return parent::save();
	}
	
	protected function saveImage()
	{
		jimport('joomla.filesystem.file');
		jimport('joomla.filesystem.folder');
		
		$field = "fileupload";
		$path = JPATH_SITE.DS.'media/com_openhouse/uploads/agents/';
		$valid = array('jpeg', 'jpg');
		$width = 193;
		$height = 252;
		
		if (!isset($_FILES[$field])) {
			return;
		}
		
		$upload = $_FILES[$field];
		
		if ($upload['error'] > 0) {
			return;
		}
		
		if ($this->picture) {
			JFile::delete($path . $this->picture);
		}
		
		$filename = 'agent-'. $this->id .'.jpg';
	
		$this->croppedThumbnail($_FILES[$field]['tmp_name'], $width, $height, $path . $filename);
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
	
	/**
	* Delete saved images when deleting row data.
	*
	* @see KDatabaseRowTable::delete()
	*/
	public function delete()
	{
		jimport('joomla.filesystem.file');
		$path = JPATH_SITE.DS.'media/com_openhouse/uploads/';
	
		if (JFile::exists($path .'agent/'. $this->picture)) {
			JFile::delete($path .'agent/'. $this->picture);
		}
	
		return parent::delete();
	}
}