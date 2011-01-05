<html>
<head>
	<title>PHPDeveloper: PHP News, Views and Community</title>
	<link rel="stylesheet" href="/assets/css/site.css" type="text/css" />
	<script src="/public/js/jquery.js" type="text/javascript"></script>
<script src="/assets/js/site.js" type="text/javascript"></script>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.phpdeveloper.org/feed" />
</head>

<body>

<table cellpadding="0" cellspacing="0" border="0" id="layout">
<tr>
	<td class="topbar" width="240"><a href="/"><img src="/assets/img/layout/logo3.gif" border="0"/></a></td>
	<td class="topbar" style="vertical-align:bottom">&nbsp;</td>
	<td class="topbar" align="right" valign="bottom" colspan="2">
		<form action="/search" method="POST" style="margin:0px;padding:0px">
		<input style="margin-bottom:10px;margin-right:2px" type="text" size="14" name="search_terms"/>
		<input style="margin-bottom:10px;margin-right:10px" type="submit" value="go" name="search_submit"/>
		</form>

	</td>
</tr>
<tr>
	<td style="padding:0px;margin:0px">&nbsp;</td>
	<td colspan="3" valign="top" style="padding-top:0px;">
		<a href="/news/submit"><img src="/assets/img/layout/tab-submit_news.gif" id="submit_news" border="0"/></a>
		<a href="/archive"><img src="/assets/img/layout/tab-archive.gif" id="archive" onMouseOver="rollover('archive','on')" onMouseOut="rollover('archive','off')" border="0"/></a>
		<!--
		<a href="/tutorials"><img src="/assets/img/layout/tab-tutorials.gif" id="tutorials" onMouseOver="rollover('tutorials','on')" onMouseOut="rollover('tutorials','off')" border="0"/></a>
		<a href="/events"><img src="/assets/img/layout/tab-events.gif" id="events" onMouseOver="rollover('events','on')" onMouseOut="rollover('events','off')" border="0"/></a>
		-->
		<a href="/contact"><img src="/assets/img/layout/tab-contact.gif" id="contact" onMouseOver="rollover('contact','on')" onMouseOut="rollover('contact','off')" border="0"/></a>
		<!--
		<a href="/talks"><img src="/assets/img/layout/tab-talks.gif" id="talks" onMouseOver="rollover('talks','on')" onMouseOut="rollover('talks','off')" border="0"/></a>
		-->

		<a href="http://blog.phpdeveloper.org"><img src="/assets/img/layout/tab-blog.gif" id="blog" onMouseOver="rollover('blog','on')" onMouseOut="rollover('blog','off')" border="0"/></a>
	</td>
</tr>
<tr>
	<td colspan="4" style="height:12px;font-size:1px">&nbsp;
			</td>
</tr>
<tr>
	<td valign="top" style="padding-left:7px;padding-right:14px">
		
		<div style="padding:5 5 10 5;vertical-align:top">
		<table cellpadding="0" cellspacing="0" border="0">

		<tr><td><a class="sidelink" href="http://www.phpdeveloper.org/feed"><img src="/assets/img/layout/feed_icon-small.gif" border="0"></a></td><td style="padding-left:4px"><span class="sidetitle">News Feed</span></td></tr>
		<tr><td style="padding-top:4px"><a class="sidelink" href="http://jobs.phpdeveloper.org/feed"><img src="/assets/img/layout/feed_icon-small.gif" border="0"></a></td><td style="padding-left:4px"><span class="sidetitle">Jobs Feed</span></td></tr>
		</table>
		</div>

		<span class="sidetitle">Sections</span>
		<div id="categories">
			
					<div width="140" onClick="window.location='/tutorials'" onMouseOver="side_highlight('side_tutorials','over')" onMouseOut="side_highlight('side_tutorials','out')" id="side_tutorials">

						<img src="/assets/img/layout/gray_arrows.gif"/>
						<a class="sidelink" style="font-weight:bold" href="/tutorials">Tutorials</a>
					</div>
				
					<div width="140" onClick="window.location='/tag/book'" onMouseOver="side_highlight('side_books','over')" onMouseOut="side_highlight('side_books','out')" id="side_books">
						<img src="/assets/img/layout/gray_arrows.gif"/>
						<a class="sidelink" style="font-weight:bold" href="/tag/book">Books</a>
					</div>
				
					<div width="140" onClick="window.location='/events'" onMouseOver="side_highlight('side_events','over')" onMouseOut="side_highlight('side_events','out')" id="side_events">

						<img src="/assets/img/layout/gray_arrows.gif"/>
						<a class="sidelink" style="font-weight:bold" href="/events">Events</a>
					</div>
				
					<div width="140" onClick="window.location='/talks'" onMouseOver="side_highlight('side_talks','over')" onMouseOut="side_highlight('side_talks','out')" id="side_talks">
						<img src="/assets/img/layout/gray_arrows.gif"/>
						<a class="sidelink" style="font-weight:bold" href="/talks">Talks</a>
					</div>
				
					<div width="140" onClick="window.location='http://jobs.phpdeveloper.org'" onMouseOver="side_highlight('side_jobs','over')" onMouseOut="side_highlight('side_jobs','out')" id="side_jobs">

						<img src="/assets/img/layout/gray_arrows.gif"/>
						<a class="sidelink" style="font-weight:bold" href="http://jobs.phpdeveloper.org">Jobs</a>
					</div>
						</div>
		<br/>
		<center>
		<a href="http://joind.in"><img src="/assets/img/ads/joindin_sidebar.gif" border="0"/></a>
		<br/><br/>

		<a href="http://www.twitter.com/phpdeveloper"><img src="/assets/img/layout/follow_twitter.gif" border="0"/></a></center>
		<br/>

		
				<div align="center">
				<div align="center" id="user_logged_in" style="width:200px">
					<span style="font-size:12px">
						logged in as <b>enygma</b><br/>
					</span>

					not you? <a href="/user/logout" onClick="submitLogout();return false;">logoff</a>
					<br/><br/>[<a href="/admin">administration</a>]
				</div></div>
			<form id="logout_form" action="/user/logout" method="POST"><input type="hidden" name="process" id="process" value="logout"/></form>		<!--	
		<div align="center" style="font-size:8px;color:#585858">
		<div style="width:90%;background-color:#EEEEEE;border:1px solid #CCCCCC;padding:3px;" align="center">
			<a href="http://support.securephphosting.com/affiliate/idevaffiliate.php?id=100_0_1_3"><img src="/assets/img/ads/php-secure-hosting-98.gif" border="0"/></a>
		</div>
		SECURE & RELIABLE PHP HOSTING
		</div>
		<br/>
		-->
		
		<div style="width:219px">

		<span class="sidetitle">Recent Jobs</span>

		
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15458">Job Posting: Shotfarm.com Seeks Director of Development (Chicago, IL)</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15457">Job Posting: UJA-Federation of New York Seeks PHP Web Developer (New York, NY)</a>
				</div>

			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15276">Job Posting: GoDaddy.com Seeks PHP Developer (Phoenix, AZ or Denver, CO)</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15275">Job Posting: Apollo Interactive Seeks PHP Programmer (Culver City, CA)</a>
				</div>

			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15241">Job Posting: Discovery Communications, LLC Seeks Web Developer (Atlanta, GA)</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15166">Job Posting: National Geographic Seeks LAMP Web Developer (Washington, D.C.)</a>
				</div>

			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15165">Job Posting: Grow LLC Seeks Senior LAMP Developer (New York, NY)</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15136">Job Posting: Distribion Seeks PHP Application Developer (Dallas, Tx)</a>
				</div>

			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15135">Job Posting: Worldwide Travel Directory Seeks LAMP Consultant (New York City, NY)</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="http://jobs.phpdeveloper.org/news/15028">Job Posting: Oakley Seeks Web Software Engineer (Foothill Ranch, CA)</a>
				</div>

					</div>
		<br/>
		<div style="width:219px">

		<span class="sidetitle">News Archive</span>
		
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15621">Sameer Borate' Blog: Creating SQL schemas with Doctrine DBAL</a>

				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15620">Ilia Alshanetsky's Blog: Domain Distribution by City</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15619">Liip Blog: Using the Symfony2 console</a>

				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15618">Michelangelo van Dam's Blog: Job Hunting 101</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15617">Volker Dusch's Blog: Setting up Hudson for PHP Projects in 15 minutes</a>

				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15616">Wim Godden's Blog: Automated PHP 5.3 compatibility testing for your (old) code</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15615">PHP North West: Lorenzo Alberton: Profile your PHP application and make it fly</a>

				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15614">Community News: Latest Releases from PHPClasses.org</a>
				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15613">Zend Developer Zone: Book Report: A Beginner's Guide to Zend Framework</a>

				</div>
			
				<div style="margin-bottom:5px">
					<img src="/assets/img/layout/gray_arrows.gif"/>
					<a class="sidelink" href="/news/15612">Till Klampaeckel's Blog: Zend Framework: Writing an IN-Clause with Zend_Db</a>
				</div>
					</div>


		</center>

	</td>
	<td colspan="2" valign="top" style="padding-right:10px">
		<?php echo $content; ?>
	</td>
</tr>
</table>
</body>
</html>
