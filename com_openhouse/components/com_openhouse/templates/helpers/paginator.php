<?php

class ComOpenhouseTemplateHelperPaginator extends KTemplateHelperPaginator
{
	
	protected function _pages($pages)
	{
		$html = '<ul class="pages">';

		if ($pages['previous']->active) {
			//$html .= '<li class="first">&laquo; '.$this->_link($pages['first'], 'First').'</li>';
			$html .= '<li class="previous">'.$this->_link($pages['previous'], '&laquo;').'</li>';
		}

		foreach($pages['pages'] as $page) {
			$html .= '<li class="'. (($page->current) ? 'active' : '') .'">'.$this->_link($page, $page->page).'</li>';
		}

		if ($pages['next']->active) {
			$html .= '<li class="next">'.$this->_link($pages['next'], '&raquo;').'</li>';
			//$html .= '<li class="previous">'.$this->_link($pages['last'], 'Last').' &raquo;</li>';
		}

		$html .= '</ul>';
		return $html;
	}	
}