<?php

namespace Fuel\App\Controller;

class Tag extends Template 
{

	public $_default_action = 'index';

	public function action_index()
	{
		$tag = $this->param('tagname');
		$newsResults = \Fuel\App\Model\News::getNewsByTag($tag);	
		$this->render('news/_news-list',array('newsResults'=>$newsResults));
	}

}

?>
