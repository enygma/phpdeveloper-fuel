<?php

$renderedNews = array();
foreach($newsResults as $newsItem){
	$renderedNews[]=View::factory('news/_item',array('newsData'=>$newsItem))->render();
}

echo View::factory('news/index',array('renderedNews'=>$renderedNews))->render();


?>
