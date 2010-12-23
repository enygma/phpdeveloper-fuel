<?php

namespace Fuel\App\Model;

use ActiveRecord;

class News extends ActiveRecord\Model { 

	/**
	* Shortcut to get the latest news details
	* @return array $results News details
	*/
	public static function getLatestNews()
	{
		$results = self::find('all',array(
                        'select'	=> array('title','story','date','ID'),
                        'limit'		=> 10,
                        'order'		=> array('date','desc')
                ));
		return $results;
	}

}

/* End of file news.php */
