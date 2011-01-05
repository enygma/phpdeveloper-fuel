<?php

#namespace Fuel\App\Controller;
use Fuel\App\Model as Models;

class Controller_Tag extends Controller_Template 
{

	public $_default_action = 'index';

	public function action_index()
	{
		$tag = $this->param('tagname');
		$News = new Model_News;

		$newsResults = $News->getNewsByTag($tag);	
		$this->template->content = View::factory('news/_news-list',array('newsResults'=>$newsResults));
	}

}

?>
