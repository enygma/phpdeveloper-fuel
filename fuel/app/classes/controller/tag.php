<?php

namespace Fuel\App\Controller;

class Tag extends Template 
{

	public $_default_action = 'index';

	public function action_index()
	{
		$tag = $this->param('tagname');
		$News = new \Fuel\App\Model\News;

		$newsResults = $News->getNewsByTag($tag);	
		$this->render('news/_news-list',array('newsResults'=>$newsResults));
	}

}

?>
