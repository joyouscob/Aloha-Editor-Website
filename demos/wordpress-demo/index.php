<?php require_once '../../inc/version.inc' ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head 
profile="http://gmpg.org/xfn/11">

<!-- ##LOAD ALOHA START## -->
<link href="<?=$alohaeditor_cdn?>css/aloha.css" type="text/css" rel="stylesheet" />


<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/vendor/jquery-1.7.1.js"></script>
<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/require.js"></script>

<script>
	var Aloha = window.Aloha || ( window.Aloha = {} );
	
	Aloha.settings = {
		locale: 'en',
		plugins: {
			format: {
				config : [ 'b', 'i','u','del','sub','sup', 'p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'pre'],
			  	editables : {
					heading1 	: [ 'b', 'i', 'u', 'del', 'sub', 'sup'  ],
					heading2 	: [ 'b', 'i', 'u', 'del', 'sub', 'sup'  ],
					heading3 	: [ 'b', 'i', 'u', 'del', 'sub', 'sup'  ]
			  	}
			}
		},
		sidebar: {
			disabled: true
		}
	};
</script>

<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/aloha.js"
			data-aloha-plugins="common/ui,
								common/format,
		                        common/table,
		                        common/list,
		                        common/link,
		                        common/highlighteditables,
		                        common/block,
		                        common/image,
		                        common/undo,
		                        common/contenthandler,
		                        common/paste,
		                        common/commands,
		                        common/abbr"></script>

<!-- turn an element into editable Aloha continuous text -->
<script type="text/javascript">
Aloha.ready(function() {
	// mark the editable parts
	$('.story-excerpt').aloha();
	$('.gallery-item').aloha();
	$('#heading1').aloha();
	$('#heading2').aloha();
	$('#heading3').aloha();

	// and the blocks
	$('.gallery-icon').addClass('GENTICS_block').attr('contentEditable', false);
	$('.meta').addClass('GENTICS_block').attr('contentEditable', false);
	$('.story-excerpt > a').addClass('GENTICS_block').attr('contentEditable', false);

});

</script>

<style type="text/css">
.aloha-editable-active .GENTICS_block {
	background-color: #B7D6FA !important;
}
</style>

<!-- ##LOAD ALOHA END## -->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="fb:page_id" content="6427302910">
<title>WordPress › Showcase</title>
<style type="text/css">
@import url("http://s.wordpress.org/style/wp4.css?7");
</style>
<link media="only screen and (max-device-width: 480px)" 
href="wordpress/iphone.css" type="text/css" rel="stylesheet">
<link rel="shortcut icon" href="http://s.wordpress.org/favicon.ico?3" 
type="image/x-icon">
<link rel="alternate" type="application/rss+xml" title="WordPress Blog 
RSS" href="http://wordpress.org/showcase/feed/">

<!--[if lt IE 8]>
<style type="text/css">
@import url("http://s.wordpress.org/style/ie.css");
</style>
<![endif]-->

<style type="text/css">
@import url("http://s.wordpress.org/style/blog-wp4.css");
@import url("http://s.wordpress.org/showcase-wp-content/themes/showcase/style.css?4");
</style>
<link rel="alternate" type="application/rss+xml" title="WordPress 
Showcase » Home Comments Feed" 
href="http://wordpress.org/showcase/feed/">
<link rel="stylesheet" id="wp-postratings-css" 
href="wordpress/postratings-css.css" type="text/css" media="all">
<link rel="EditURI" type="application/rsd+xml" title="RSD" 
href="http://wordpress.org/showcase/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" 
href="http://wordpress.org/showcase/wp-includes/wlwmanifest.xml"> 
<link rel="index" title="WordPress Showcase" 
href="http://wordpress.org/showcase">
<meta name="generator" content="WordPress 2.9.2">
<link rel="canonical" href="http://wordpress.org/showcase">
<link rel="shortlink" href="http://wp.me/PmwwI-ry">



</head><body 
id="wordpress-org">

<div id="header">
	<div class="wrapper">
		<h1><a href="http://wordpress.org/">WordPress.org</a></h1>
		
		<form action="http://wordpress.org/search/do-search.php" method="get" 
id="head-search">
			<input class="text" name="search" value="Search WordPress.org" 
maxlength="150" onfocus="this.value=(this.value=='Search WordPress.org')
 ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Search 
WordPress.org' : this.value;" type="text"> <input class="button" 
value="Go" type="submit">
		</form>

		<ul>
	<li><a href="http://wordpress.org/" title="Home is where the heart is.">Home</a>

</li>
	<li><a class="current" href="" title="See some of the sites built on 
WordPress.">Showcase</a>

</li>
	<li><a href="http://wordpress.org/extend/" title="Taking WordPress 
beyond your wildest imagination.">Extend</a>

<ul class="nav-submenu">		<li><a 
href="http://wordpress.org/extend/plugins/" title="Plugins can extend 
WordPress to do almost anything you can imagine.">Plugins</a></li>
			<li><a href="http://wordpress.org/extend/themes/" title="Find just 
the right look for your website.">Themes</a></li>
	</ul></li>
	<li><a href="http://wordpress.org/about/" title="About the WordPress 
Organization, and where we're going.">About</a>

</li>
	<li><a href="http://codex.wordpress.org/Main_Page" 
title="Documentation, tutorials, best practices.">Docs</a>

</li>
	<li><a href="http://wordpress.org/development/" title="Come here for 
the latest scoop.">Blog</a>

</li>
	<li><a href="http://wordpress.org/support/" title="Support and 
discussion forums.">Forums</a>

</li>
	<li><a href="http://wordpress.org/hosting/" title="Find a home for your
 blog.">Hosting</a>

</li>
	<li id="download"><a href="http://wordpress.org/download/" title="Get 
it. Got it? Good.">Download</a>

</li>
</ul>
	</div>
</div>


<div id="headline">
	<div class="wrapper">
		<h2>Showcase</h2>
	</div>
</div>

<div id="pagebody" class="home">
	<div class="wrapper">
				<div class="col-2">
			<p class="button"><a 
href="http://wordpress.org/showcase/submit-a-wordpress-site/">Submit a 
Site</a></p>

			<h4>Popular Tags</h4><ul class="submenu"><li><a 
href="http://wordpress.org/showcase/tag/cms/" rel="tag">CMS (105)</a></li><li><a
 href="http://wordpress.org/showcase/tag/people/" rel="tag">People (70)</a></li><li><a
 href="http://wordpress.org/showcase/tag/technology/" rel="tag">Technology
 (62)</a></li><li><a href="http://wordpress.org/showcase/tag/business/" 
rel="tag">Business (46)</a></li><li><a 
href="http://wordpress.org/showcase/tag/education/" rel="tag">Education 
(43)</a></li><li><a href="http://wordpress.org/showcase/tag/college/" 
rel="tag">College (42)</a></li><li><a 
href="http://wordpress.org/showcase/tag/celebrities/" rel="tag">Celebrities
 (40)</a></li><li><a href="http://wordpress.org/showcase/tag/startups/" 
rel="tag">Startups (35)</a></li><li><a 
href="http://wordpress.org/showcase/tag/music/" rel="tag">Music (34)</a></li><li><a
 href="http://wordpress.org/showcase/tag/fortune-500/" rel="tag">Fortune
 500 (32)</a></li></ul>
			<h4>More Tags</h4>
			<ul class="submenu">
				<li><a href="http://wordpress.org/showcase/tag-cloud/">Tag Cloud</a></li>
			</ul>

			<h4>Flavors</h4>
			<ul class="submenu">
					<li class="cat-item cat-item-180"><a 
href="http://wordpress.org/showcase/flavor/buddypress/" title="View all 
posts filed under BuddyPress">BuddyPress</a>
</li>
	<li class="cat-item cat-item-1"><a 
href="http://wordpress.org/showcase/flavor/uncategorized/" title="View 
all posts filed under Uncategorized">Uncategorized</a>
</li>
	<li class="cat-item cat-item-4"><a 
href="http://wordpress.org/showcase/flavor/wordpress-mu/" title="View 
all posts filed under WordPress MU">WordPress MU</a>
</li>
	<li class="cat-item cat-item-5"><a 
href="http://wordpress.org/showcase/flavor/wordpresscom/" title="View 
all posts filed under WordPress.com">WordPress.com</a>
</li>
	<li class="cat-item cat-item-6"><a 
href="http://wordpress.org/showcase/flavor/wordpresscom-vip/" 
title="View all posts filed under WordPress.com VIP">WordPress.com VIP</a>
</li>
	<li class="cat-item cat-item-7"><a 
href="http://wordpress.org/showcase/flavor/wordpressorg/" title="View 
all posts filed under WordPress.org">WordPress.org</a>
</li>
			</ul>
		</div>
		<div class="col-7">
			<h3 id="heading1">Featured Sites</h3>
					<div class="featured-sites">
			<div class="gallery">
						<dl class="gallery-item">
					<dt class="gallery-icon">
					<a href="http://wordpress.org/showcase/wsj-magazine/"><img 
src="wordpress/wsj1.png" alt="WSJ. Magazine" width="240" 
height="180"></a>
					</dt>
					<dd class="gallery-caption">
						<h5><a href="http://wordpress.org/showcase/wsj-magazine/" 
title="WSJ. Magazine">WSJ. Magazine</a></h5>
						<div class="excerpt"><p>The Magazine from the Wall Street 
Journal.&nbsp; At WSJ. we believe luxury is not about how you spend—it’s
 the way you live that counts, writes Editor in Chief...</p></div>
						<div class="meta"><strong>Tags:</strong> <a 
href="http://wordpress.org/showcase/tag/cms/" rel="tag">CMS (105)</a>, <a
 href="http://wordpress.org/showcase/tag/dow-jones/" rel="tag">Dow Jones
 (2)</a>, <a href="http://wordpress.org/showcase/tag/fortune-500/" 
rel="tag">Fortune 500 (32)</a>, <a 
href="http://wordpress.org/showcase/tag/magazines/" rel="tag">Magazines 
(25)</a>, <a href="http://wordpress.org/showcase/tag/newscorp/" 
rel="tag">Newscorp (3)</a>, <a 
href="http://wordpress.org/showcase/tag/wall-street-journal/" rel="tag">Wall
 Street Journal (4)</a></div>					</dd>
				</dl>
						<dl class="gallery-item">
					<dt class="gallery-icon">
					<a href="http://wordpress.org/showcase/the-university-lectures/"><img
 src="wordpress/httplectures.png" alt="The University Lectures" 
width="240" height="180"></a>
					</dt>
					<dd class="gallery-caption">
						<h5><a 
href="http://wordpress.org/showcase/the-university-lectures/" title="The
 University Lectures">The University Lectures</a></h5>
						<div class="excerpt"><p>The University Lectures has brought to the
 Syracuse University campus and the Central New York community some of 
the world’s most dynamic, influential and...</p></div>
						<div class="meta"><strong>Tags:</strong> <a 
href="http://wordpress.org/showcase/tag/cms/" rel="tag">CMS (105)</a>, <a
 href="http://wordpress.org/showcase/tag/education/" rel="tag">Education
 (43)</a>, <a href="http://wordpress.org/showcase/tag/innovative/" 
rel="tag">Innovative (31)</a></div>					</dd>
				</dl>
						<div class="clear"></div>
			</div>
			</div>
		
		<h3 id="heading2">Recently Added Sites</h3>
					<div class="story-excerpt">
				<a 
href="http://wordpress.org/showcase/national-teen-dating-abuse-helplin/"
 title="National Teen Dating Abuse Helpline"><img 
src="wordpress/httpwww.png" class="alignleft" alt="National Teen
 Dating Abuse Helpline" width="145" height="110"></a>

				<h5><a 
href="http://wordpress.org/showcase/national-teen-dating-abuse-helplin/"
 title="National Teen Dating Abuse Helpline">National Teen Dating Abuse 
Helpline</a></h5>
				<div class="excerpt"><p>loveisrespect, National Teen Dating Abuse 
Helpline was launched in February 2007 with help from founding sponsor, 
Liz Clairborne Inc. It is a national 24-hour resource that can be 
accessed by phone or...</p></div>
				<div class="meta"><strong>Tags:</strong> <a 
href="http://wordpress.org/showcase/tag/health/" rel="tag">Health (11)</a></div>
				<div class="clear"></div>
			</div>

					<div class="story-excerpt">
				<a href="http://wordpress.org/showcase/my-telegraph/" title="My 
Telegraph"><img src="wordpress/httpmy.png" class="alignleft" 
alt="My Telegraph" width="145" height="110"></a>

				<h5><a href="http://wordpress.org/showcase/my-telegraph/" title="My 
Telegraph">My Telegraph</a></h5>
				<div class="excerpt"><p>My Telegraph is the social networking 
component of The Daily Telegraph, a major newspaper distributed 
throughout the United Kingdom and around the world.
Why it’s in the Showcase: The Daily Telegraph’s...</p></div>
				<div class="meta"><strong>Tags:</strong> <a 
href="http://wordpress.org/showcase/tag/newspaper/" rel="tag">Newspaper 
(15)</a>, <a href="http://wordpress.org/showcase/tag/social-network/" 
rel="tag">Social Network (17)</a></div>
				<div class="clear"></div>
			</div>

					<div class="story-excerpt">
				<a href="http://wordpress.org/showcase/42below/" title="42Below"><img
 src="wordpress/httpwww_002.png" class="alignleft" alt="42Below"
 width="145" height="110"></a>

				<h5><a href="http://wordpress.org/showcase/42below/" title="42Below">42Below</a></h5>
				<div class="excerpt"><p>42Below, which hails from New Zealand, is 
“the world’s most awarded voka”.
Why it’s in the Showcase: 42Below’s well-designed official website 
features a variety of content,...</p></div>
				<div class="meta"><strong>Tags:</strong> <a 
href="http://wordpress.org/showcase/tag/food/" rel="tag">Food (12)</a>, <a
 href="http://wordpress.org/showcase/tag/innovative/" rel="tag">Innovative
 (31)</a>, <a href="http://wordpress.org/showcase/tag/international/" 
rel="tag">International (13)</a></div>
				<div class="clear"></div>
			</div>

				<h3 id="heading3"><a href="http://wordpress.org/showcase/archives/">View All »</a></h3>
		</div>

				<div class="col-3">
			<h4 class="search">Search</h4>
			<form method="get" id="searchform" 
action="http://wordpress.org/showcase/">
			<div><input name="s" id="s" class="text" type="text">
			<input id="searchsubmit" value="Search" class="button" type="submit">
			</div>
			</form>
			<h4>Top Rated</h4>
			<table class="top-rated">
			<tbody><tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="748 votes, average: 4.43 out 
of 5" title="748 votes, average: 4.43 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="748 votes, average: 4.43 out of 5" title="748 votes, average: 4.43 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="748 votes, average: 4.43 out 
of 5" title="748 votes, average: 4.43 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="748 votes, average: 4.43 out of 5" title="748 votes, average: 4.43 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_half.gif" alt="748 votes, average: 4.43 
out of 5" title="748 votes, average: 4.43 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/h-mag/" title="h Mag">h Mag</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="1,597 votes, average: 4.05 
out of 5" title="1,597 votes, average: 4.05 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="1,597 votes, average: 4.05 out of 5" title="1,597 votes, average: 
4.05 out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="1,597 votes, average: 4.05 
out of 5" title="1,597 votes, average: 4.05 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="1,597 votes, average: 4.05 out of 5" title="1,597 votes, average: 
4.05 out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="1,597 votes, average: 4.05 
out of 5" title="1,597 votes, average: 4.05 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/web-designer-wall/" title="Web 
Designer Wall">Web Designer Wall</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="168 votes, average: 4.04 out 
of 5" title="168 votes, average: 4.04 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="168 votes, average: 4.04 out of 5" title="168 votes, average: 4.04 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="168 votes, average: 4.04 out 
of 5" title="168 votes, average: 4.04 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="168 votes, average: 4.04 out of 5" title="168 votes, average: 4.04 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="168 votes, average: 4.04 out
 of 5" title="168 votes, average: 4.04 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/mikeroweworks/" 
title="mikeroweWORKS">mikeroweWORKS</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="598 votes, average: 3.96 out 
of 5" title="598 votes, average: 3.96 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="598 votes, average: 3.96 out of 5" title="598 votes, average: 3.96 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="598 votes, average: 3.96 out 
of 5" title="598 votes, average: 3.96 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="598 votes, average: 3.96 out of 5" title="598 votes, average: 3.96 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="598 votes, average: 3.96 out
 of 5" title="598 votes, average: 3.96 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/clouds-365-project/" title="Clouds 
365 Project">Clouds 365 Project</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="2,211 votes, average: 3.94 
out of 5" title="2,211 votes, average: 3.94 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="2,211 votes, average: 3.94 out of 5" title="2,211 votes, average: 
3.94 out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="2,211 votes, average: 3.94 
out of 5" title="2,211 votes, average: 3.94 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_half.gif" 
alt="2,211 votes, average: 3.94 out of 5" title="2,211 votes, average: 
3.94 out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="2,211 votes, average: 3.94 
out of 5" title="2,211 votes, average: 3.94 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/i-love-typography/" title="I Love 
Typography">I Love Typography</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="96 votes, average: 3.88 out 
of 5" title="96 votes, average: 3.88 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="96 votes, average: 3.88 out of 5" title="96 votes, average: 3.88 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="96 votes, average: 3.88 out 
of 5" title="96 votes, average: 3.88 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_half.gif" 
alt="96 votes, average: 3.88 out of 5" title="96 votes, average: 3.88 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="96 votes, average: 3.88 out 
of 5" title="96 votes, average: 3.88 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/justin-guarini/" title="Justin 
Guarini">Justin Guarini</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="20 votes, average: 3.85 out 
of 5" title="20 votes, average: 3.85 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="20 votes, average: 3.85 out of 5" title="20 votes, average: 3.85 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="20 votes, average: 3.85 out 
of 5" title="20 votes, average: 3.85 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_half.gif" 
alt="20 votes, average: 3.85 out of 5" title="20 votes, average: 3.85 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="20 votes, average: 3.85 out 
of 5" title="20 votes, average: 3.85 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/temple-fox-mis/" title="Temple Fox 
MIS">Temple Fox MIS</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="592 votes, average: 3.83 out 
of 5" title="592 votes, average: 3.83 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="592 votes, average: 3.83 out of 5" title="592 votes, average: 3.83 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="592 votes, average: 3.83 out 
of 5" title="592 votes, average: 3.83 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_half.gif" 
alt="592 votes, average: 3.83 out of 5" title="592 votes, average: 3.83 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="592 votes, average: 3.83 out
 of 5" title="592 votes, average: 3.83 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/smashing-apps/" title="Smashing 
Apps">Smashing Apps</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="111 votes, average: 3.74 out 
of 5" title="111 votes, average: 3.74 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="111 votes, average: 3.74 out of 5" title="111 votes, average: 3.74 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="111 votes, average: 3.74 out 
of 5" title="111 votes, average: 3.74 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_half.gif" 
alt="111 votes, average: 3.74 out of 5" title="111 votes, average: 3.74 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="111 votes, average: 3.74 out
 of 5" title="111 votes, average: 3.74 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/the-streamy-awards/" title="The 
Streamy Awards">The Streamy Awards</a></td></tr>
<tr valign="top"><td class="top-rated-stars" width="54"><img 
src="wordpress/rating_on.gif" alt="57 votes, average: 3.72 out 
of 5" title="57 votes, average: 3.72 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_on.gif" 
alt="57 votes, average: 3.72 out of 5" title="57 votes, average: 3.72 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_on.gif" alt="57 votes, average: 3.72 out 
of 5" title="57 votes, average: 3.72 out of 5" 
class="post-ratings-image"><img src="wordpress/rating_half.gif" 
alt="57 votes, average: 3.72 out of 5" title="57 votes, average: 3.72 
out of 5" class="post-ratings-image"><img 
src="wordpress/rating_off.gif" alt="57 votes, average: 3.72 out 
of 5" title="57 votes, average: 3.72 out of 5" 
class="post-ratings-image"></td><td><a 
href="http://wordpress.org/showcase/irrational-games/" title="Irrational
 Games">Irrational Games</a></td></tr>
			</tbody></table>

			<h4>Most Votes</h4>
			<table class="most-votes">
			<tbody><tr valign="top"><td width="54"><span class="most-rated">2,211</span></td><td><a
 href="http://wordpress.org/showcase/i-love-typography/" title="I Love 
Typography">I Love Typography</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">1,597</span></td><td><a
 href="http://wordpress.org/showcase/web-designer-wall/" title="Web 
Designer Wall">Web Designer Wall</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">748</span></td><td><a
 href="http://wordpress.org/showcase/h-mag/" title="h Mag">h Mag</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">700</span></td><td><a
 href="http://wordpress.org/showcase/grain-edit/" title="Grain Edit">Grain
 Edit</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">598</span></td><td><a
 href="http://wordpress.org/showcase/clouds-365-project/" title="Clouds 
365 Project">Clouds 365 Project</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">592</span></td><td><a
 href="http://wordpress.org/showcase/smashing-apps/" title="Smashing 
Apps">Smashing Apps</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">561</span></td><td><a
 href="http://wordpress.org/showcase/web-designer-depot/" 
title="Webdesigner Depot">Webdesigner Depot</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">536</span></td><td><a
 href="http://wordpress.org/showcase/webappers/" title="WebAppers">WebAppers</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">519</span></td><td><a
 href="http://wordpress.org/showcase/playstationblog/" 
title="PlayStation.Blog">PlayStation.Blog</a></td></tr>
<tr valign="top"><td width="54"><span class="most-rated">512</span></td><td><a
 href="http://wordpress.org/showcase/wsj-magazine/" title="WSJ. 
Magazine">WSJ. Magazine</a></td></tr>
			</tbody></table>
		</div>
</div>
</div>
<img id="wpstats" src="wordpress/g.gif" alt="">

<div id="footer">
	<div class="wrapper">
		<p> 
			<a href="http://wordpress.org/about/privacy/">Privacy</a> | 
			<a href="http://wordpress.org/about/gpl/">License / GPL</a>
            &nbsp; &nbsp; See also: 
            <a href="http://wordpress.com/" title="Hassle-free WP 
hosting">WordPress.com</a> |
			<a href="http://wordpress.tv/" title="Videos, tutorials, WordCamps">WordPress.TV</a>
 |
			<a href="http://central.wordcamp.org/" title="Find a WordPress event 
near your home">WordCamp</a> |
			<a href="http://jobs.wordpress.net/" title="Find or post WordPress 
jobs">WP Jobs</a> | 
            <a href="http://ma.tt/" title="Co-founder of WordPress, an 
example of what WordPress can do">Matt</a> |
            <a href="http://www.facebook.com/WordPress">Fan WP on 
Facebook</a> |
			<a href="http://wordpress.org/development/feed/" class="rsslink">Blog
 RSS</a>
		</p>
		<h6>Code is Poetry</h6>
	</div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17460389-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body></html>
