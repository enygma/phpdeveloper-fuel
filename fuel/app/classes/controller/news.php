<?php

//use \Fuel\App\Model as Models;

class Controller_News extends Controller_Template {

        public $default_action = 'index';

        public function action_index($newsId = null)
        {

		$News = new Model_News;

		if($this->param('newsid')){
			$newsResults = array($News->getNewsDetail($this->param('newsid')));
		}else{
			$newsResults = $News->getLatestNews();
		}
		$this->template->content = View::factory('news/_news-list',array('newsResults'=>$newsResults));
        }

}
