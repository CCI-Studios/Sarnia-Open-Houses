<?php

class ComOpenhouseTemplateFilterAlias extends KTemplateFilterAlias
{
	protected $_regex_alias_read = array();
	protected $_regex_alias_write = array();
	
	public function append(array $alias, $mode = KTemplateFilter::MODE_READ, $regex = false)
	{
		if ($regex) {
			if ($mode & KTemplateFilter::MODE_READ) {
				$this->_regex_alias_read = array_merge($this->_regex_alias_read, $alias);
			}
			
			if ($mode & KTemplateFilter::MODE_WRITE) {
				$this->_regex_alias_write = array_merge($this->_regex_alias_write, $alias);
			}
		} else {
			parent::append($alias, $mode);
		}
		
		return $this;
	}
	
	public function read(&$text)
	{
		$text = preg_replace(array_keys($this->_regex_alias_read), array_values($this->_regex_alias_read), $text);
		
		parent::read($text);
		return $this;
	}
	
	public function write(&$text)
	{
		$text = preg_replace(array_keys($this->_regex_alias_write), array_values($this->_regex_alias_write), $text);
	
		parent::read($text);
		return $this;
	}
	
}