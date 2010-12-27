<?php

namespace Fuel\App\Controller;

class News extends Template {

        public $default_action = 'index';

        public function action_index($newsId = null)
        {
		$News = new \Fuel\App\Model\News;

		if($this->param('newsid')){
			$newsResults = array($News->getNewsDetail($this->param('newsid')));
		}else{
			$newsResults = $News->getLatestNews();
		}
		$this->render('news/_news-list',array('newsResults'=>$newsResults));
        }

}
