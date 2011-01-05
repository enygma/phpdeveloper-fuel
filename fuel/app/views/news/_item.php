<?php
//print_r($newsData);

// split the title by the first ":" (colon)
$titleParts = array(
	'byline'=> trim(substr($newsData->title,0,strpos($newsData->title,':')+1)),
	'title'	=> trim(substr($newsData->title,strpos($newsData->title,':')+1,strlen($newsData->title)))
);
?>

<div class="news_item">
	<a href="/news/<?php echo $newsData->ID ?>" class="title"><span class="stub"><?php echo $titleParts['byline']?></span><br/><?php echo $titleParts['title']?></a>
	<div style="color:#B2B2B2;padding:6 0 3 0"><span class="byline">by Chris Cornutt</span> <span class="date"> December 22, 2010 @ 13:56:17</span></div>
			
	<hr style="background-color:#B1B1B1;height:1px;width:300px;margin:2 0 5 0;border:0px"/>

	<div class="story">
	<?php echo $newsData->story ?>
	</div>
	<span class="comment_count">0 comments</span> <a class="voice" href="/news/15620">voice your opinion now!</a> <span style="font-size:11px;font-weight:bold">::</span> <span class="admin_links"><a class="admin_link" href="/news/edit/15620">edit</a> || <a class="admin_link"  href="/news/delete/15620">delete</a></span><br/>
	<span class="tags">
		<?php foreach($newsData->news_tags as $tag): ?>
			<a class="tagged_with" href="/tag/<?php echo $tag->tag?>"><?php echo $tag->tag?></a>
		<?php endforeach; ?>
	</span><br/><br/>
		</div><br/>

