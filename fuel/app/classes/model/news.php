<?php

namespace Fuel\App\Model;

use ActiveRecord;

class News extends ActiveRecord\Model { 

	/*public $has_many = array(
		array(
			'news_tags'=>array(
				'class_name'=>'news_tags',
				'foreign_key'=>'news_id'
			)
		)
	);*/
	public $has_many = array(
		'news_tags'
	);

	/**
	* Shortcut to get the latest news details
	* @return array $results News details
	*/
	public function getLatestNews()
	{
		$results = $this->find('all',array(
                        'select'	=> array('title','story','date','ID'),
                        'limit'		=> 10,
                        'order'		=> array('date','desc')
                ));
		return $results;
	}

	public function getNewsDetail($newsId)
	{
		$results = $this->find($newsId,array('include'=>array('news_tags')));
		//echo '<pre>'; var_dump($results); echo '<br/>-----------------</br>'; var_dump($results->news_tags); echo '</pre>';
		foreach($results->news_tags as $tag){
			echo $tag->tag;
		}
		return $results;
	}

	public function getNewsByTag($tag)
	{
		
	}
}

/* End of file news.php */
