<?php

class Model_News extends ActiveRecord\Model { 

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
                        'order'		=> array('date','desc'),
			'include'	=> array('news_tags')
                ));
		return $results;
	}

	public function getNewsDetail($newsId)
	{
		$results = $this->find($newsId,array('include'=>array('news_tags')));
		return $results;
	}

	public function getNewsByTag($tag)
	{
		$results = $this->find('all',array(
			'select'	=> array('title','story','date','ID'),
			'limit'		=> 10,
			'order'		=> array('date','desc'),
			'include'	=> array('news_tags'),
			'where'		=> array(
				array('tag','in',array($tag))
			)
		));
		return $results;
	}
}

/* End of file news.php */
