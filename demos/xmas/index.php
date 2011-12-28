<?php

include( '/var/www/vhosts/www.gentics.com/portalnode/etc/db_conn.inc.php' );
include( '/var/www/vhosts/www.gentics.com/portalnode/include/db.php' );

/**

mysql> create table xmascubes (id int primary key auto_increment, cubekey varchar(255), xmastext text, created int, ipaddress varchar(255));

**/

if ( $_GET['yourpersonalxmascube'] ) 
{
	$sql = 'SELECT * FROM xmascubes WHERE cubekey = "' . $_GET['yourpersonalxmascube'] . '"';
	$rs = query( $sql );
	if ( $rs['num'] > 0 ) 
	{
		$xmastext = stripslashes ($rs['arr'][0]['xmastext']);

	}
}
if ( $_POST['yourtext'] )
{
	$xmastext = stripslashes( $_POST['yourtext'] );

}

if ( !$xmastext ) $xmastext = "
<h4>Merry X-Mas</h4>
All the best for this year's X-Mas. <br />
<br />
Yours, Aloha Editor.<br />
[Click here to edit]
";

if ( $submit ) 
{
 	if ( $_POST['yourname'] && $_POST['friendsname'] && $_POST['friendsemail'] )
	{

		// save to database
		$cubekey = md5( rand(1, 10000000) );
		$cubetext = $_POST['yourtext'];
		$sql = 'INSERT INTO xmascubes VALUES ( null, "' . $cubekey . '", "' . mysql_real_escape_string($cubetext) . '", "' . time() . 
			'", "' . $_SERVER['REMOTE_ADDR'] . '", "' . $_POST['yourname'] . '", "' . $_POST['friendsname'] . '", "' .
			$_POST['friendsemail'] . '")';
		query( $sql );

		$xmasbody = "
Aloha " . $_POST['friendsname'] . ",

this Aloha X-Mas Cube is sent by your friend " . $_POST['yourname'] . ". 

Take a look at this nice X-Mas present:
http://www.aloha-editor.com/demos/xmas/?yourpersonalxmascube=" . $cubekey . "


best wishes from Gentics & Aloha Editor team too.

--
http://www.aloha-editor.com
http://www.gentics.com
";

		mail( $_POST['friendsemail'], 'Aloha! ' . $_POST['yourname'] . ' send you something for X-Mas', $xmasbody, 'From: "' . $_POST['yourname'] . 
			'" <aloha@gentics.com>' );


		$submitsuccess = true;

	}
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Author: Zachary Johnson (http://www.zachstronaut.com) 
 -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script>GENTICS_Aloha_base="../../aloha/aloha/";</script>
<script type="text/javascript" src="../../aloha/aloha/aloha.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.Format/plugin.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.Table/plugin.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.List/plugin.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.Link/plugin.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.HighlightEditables/plugin.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.TOC/plugin.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.Link/delicious.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.Link/LinkList.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.Paste/plugin.js"></script>
<script type="text/javascript" src="../../aloha/aloha/plugins/com.gentics.aloha.plugins.Paste/wordpastehandler.js"></script>

<!-- turn an element into editable Aloha continuous text -->
<script type="text/javascript">
GENTICS.Aloha.settings = {
	logLevels: {'error': true, 'warn': true, 'info': true, 'debug': false},
	errorhandling : false,
	ribbon: false,	
	"i18n": {
		// you can either let the system detect the users language (set acceptLanguage on server)
		// In PHP this would would be '<?=$_SERVER['HTTP_ACCEPT_LANGUAGE']?>' resulting in 
		// "acceptLanguage": 'de-de,de;q=0.8,it;q=0.6,en-us;q=0.7,en;q=0.2'
		// or set current on server side to be in sync with your backend system 
		"current": "en" 
	},
	"repositories": {
	 	"com.gentics.aloha.repositories.LinkList": {
	 		data: [
 		        { name: 'Aloha Developers Wiki', url:'http://www.aloha-editor.com/wiki', type:'website', weight: 0.50 },
 		        { name: 'Aloha Editor - The HTML5 Editor', url:'http://aloha-editor.com', type:'website', weight: 0.90  },
 		        { name: 'Aloha Demo', url:'http://www.aloha-editor.com/demos.html', type:'website', weight: 0.75  },
 		        { name: 'Aloha Wordpress Demo', url:'http://www.aloha-editor.com/demos/wordpress-demo/index.html', type:'website', weight: 0.75  },
 		        { name: 'Aloha Logo', url:'http://www.aloha-editor.com/images/aloha-editor-logo.png', type:'image', weight: 0.10  }
	 		]
		}
	},
	"plugins": {
	 	"com.gentics.aloha.plugins.Format": {
			config : [ 'b', 'i', 'p','sub', 'sup', 'title', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'pre', 'removeFormat']
		},
	 	"com.gentics.aloha.plugins.List": { 
			config : [ 'ul', 'ol' ]
		},
	 	"com.gentics.aloha.plugins.Link": {
			config : [ 'a' ],
		  	// all links that match the targetregex will get set the target
 			// e.g. ^(?!.*aloha-editor.com).* matches all href except aloha-editor.com
		  	targetregex : '^(?!.*aloha-editor.com).*',
		  	// this target is set when either targetregex matches or not set
		    // e.g. _blank opens all links in new window
		  	target : '_blank',
		  	// the same for css class as for target
		  	cssclassregex : '^(?!.*aloha-editor.com).*',
		  	cssclass : 'aloha',
		  	// use all resources of type website for autosuggest
		  	objectTypeFilter: ['website'],
		  	// handle change of href
		  	onHrefChange: function( obj, href, item ) {
			  	if ( item ) {
					jQuery(obj).attr('data-name', item.name);
			  	} else {
					jQuery(obj).removeAttr('data-name');
			  	}
		  	}
		},
	 	"com.gentics.aloha.plugins.Table": { 
			config : [ 'table' ]
		}
  	}
};

$(document).ready(function() {
	$('.aloha').aloha();
	$('#xmassender').submit(function() {
		$('#yourtext').val($('#xmastext').html());
  		return true;
	});
	/**if (!$.browser.webkit) {**/
	if ( $.browser.msie ) {
    		alert("Aloha! We are really sorry, but this browser does not support CSS3 yet. Use Firefox, Chrome, Safari instead!");
 	}
});

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Aloha XMAS-Cube</title>

<style type="text/css" media="screen">
body {
    background-image: url(http://www.e-maniacs.com/blog/wp-content/uploads/2009/11/winter_xmas_landscape.png);
    /**background: #090;**/
    text-align: center;
    font-family: sans-serif;
    color: black;
}

a {
    color: grey;
}

a:hover {
    text-decoration: none;
}

#backdrop {
    width: 600px;
    /**color: #0f0;**/
    font-family: monospace;
    font-size: 24px;
    margin: 0 auto;
    -webkit-transform: rotate(-45deg) skew(15deg, 15deg);
    -moz-transform: rotate(-45deg) skew(15deg, 15deg);
    -o-transform: rotate(-45deg) skew(15deg, 15deg);
    -ms-transform: rotate(-45deg) skew(15deg, 15deg);
    transform: rotate(-45deg) skew(15deg, 15deg);
}

.cube {
    position: absolute;
    top: 50px;
    left: 700px;
}

.face {
    position: absolute;
    width: 200px;
    height: 200px;
    overflow: hidden;
    font-family: monospace;
    font-size: 18px;
}

.top {
    top: 0;
    left: 89px;
    background: #fff;
    color: #999;
    -webkit-transform: rotate(-45deg) skew(15deg, 15deg);
    -moz-transform: rotate(-45deg) skew(15deg, 15deg);
    -o-transform: rotate(-45deg) skew(15deg, 15deg);
    -ms-transform: rotate(-45deg) skew(15deg, 15deg);
    transform: rotate(-45deg) skew(15deg, 15deg);
}

.left {
    top: 155px;
    left: 0;
    background: #999;
    color: #333;
    -webkit-transform: rotate(15deg) skew(15deg, 15deg);
    -moz-transform: rotate(15deg) skew(15deg, 15deg);
    -o-transform: rotate(15deg) skew(15deg, 15deg);
    -ms-transform: rotate(15deg) skew(15deg, 15deg);
    transform: rotate(15deg) skew(15deg, 15deg);
}

.right {
    top: 155px;
    left: 178px;
    background: #ccc;
    color: #666;
    -webkit-transform: rotate(-15deg) skew(-15deg, -15deg);
    -moz-transform: rotate(-15deg) skew(-15deg, -15deg);
    -o-transform: rotate(-15deg) skew(-15deg, -15deg);
    -ms-transform: rotate(-15deg) skew(-15deg, -15deg);
    transform: rotate(-15deg) skew(-15deg, -15deg);
}

.shadow {
    top: 310px;
    left: -89px;
    background: black;
    opacity: 0.5;
    -webkit-transform: rotate(-45deg) skew(15deg, 15deg);
    -moz-transform: rotate(-45deg) skew(15deg, 15deg);
    -o-transform: rotate(-45deg) skew(15deg, 15deg);
    -ms-transform: rotate(-45deg) skew(15deg, 15deg);
    transform: rotate(-45deg) skew(15deg, 15deg);
}

video {
    width: 100%;
    height: 100%;
}

#two {
    -webkit-transform: scale(0.5) translate(700px, 600px);
    -moz-transform: scale(0.5) translate(700px, 600px);
    -o-transform: scale(0.5) translate(700px, 600px);
    -ms-transform: scale(0.5) translate(700px, 600px);
    transform: scale(0.5) translate(700px, 600px);
}

.green h1, .green h2, .green h3, .green h4, .green h5, .green h6 {
	/**color: #6f6;**/
}
</style>

</head>

<body>
    
    
<div id="backdrop">
<div class="green">
<h1><span style="color:red;">Merry XMAS!!!</span></h1>
Gentics and the Aloha Editor team wish you a <b>MERRY, MERRY HTML5 & CSS3 X-Mas</b>!

<h2>Aloha Editor?</h2>
<a href="http://www.aloha-editor.com/" target="_blank">www.aloha-editor.com</a>
<br /><br />


<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br />

</div>
</div>

<div class="cube">
    <div id="xmastext" class="face top aloha">
<?

echo $xmastext; 

?>
    </div>
    <div class="face left">
    <img width="210" alt="Aloha Editor team wishes you a merry X-Mas" src="http://www.gentics.com/Content.Node/newsletter/Aloha-Weihnachten-medium.png" />
    </div>
    <div class="face right">

<?php

if ( $submitsuccess == true )
{

?>
<h4>You spread <span style="color:red;">LOVE!</span></h4>

Gentics & the Aloha Editor team thank you.
<br /><br />
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Again?</a>
<?php

} else
{

?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="xmassender">

<?php if ( $_POST['submit'] && !$_POST['yourname'] ) echo '<font color="red"><b>Your name(!):</b></font>'; else echo 'Your name:'; ?> <input type="text" name="yourname" value="<?=$_POST['yourname']; ?>" /><br />
<?php if ( $_POST['submit'] && !$_POST['friendsname'] ) echo '<font color="red"><b>Your friend\'s name(!):</b></font>'; else echo 'Your friend\'s name:'; ?> <input type="text" name="friendsname" value="<?=$_POST['friendsname']; ?>" /><br />
<?php if ( $_POST['submit'] && !$_POST['friendsemail'] ) echo '<font color="red"><b>Your friend\'s email(!):</b></font>'; else echo 'Your friend\'s email:'; ?> <input type="text" name="friendsemail" value="<?=$_POST['friendsemail']; ?>" /><br />
<br />
<input id="yourtext" type="hidden" name="yourtext" value="" />
<input type="submit" name="submit" value="Send X-Mas wishes" />
</form>

<?php 
}
?>
    </div>
    <div class="face shadow"></div>
</div>
<p><b>Click in the text on the top of the X-Mas cube to write a new X-Mas cube text for your friends.</b></p>
<p><em>Created by <a href="http://www.zachstronaut.com/">Zachary Johnson</a>.  Originally published on his old site <a href="http://tech.no.logi.es/woodshop/">tech.no.logi.es</a> in February 2009.</em></p>

</body>
</html>
