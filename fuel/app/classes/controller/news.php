<?php

namespace Fuel\App\Controller;

class News extends Template {

        public $default_action = 'index';

        public function action_index($newsId = null)
        {
		$newsResults = \Fuel\App\Model\News::getLatestNews();
		$renderedNews = array();
		foreach($newsResults as $newsItem){
			$renderedNews[]=View::factory('news/_item',array('newsData'=>$newsItem))->render();
		}

                $this->render('news/index',array('renderedNews'=>$renderedNews));
        }

}
