<?php require_once '../../inc/version.inc' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Author: Zachary Johnson (http://www.zachstronaut.com) 
 -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Aloha isocube! -- CSS "3d" isometric cube</title>

<!-- turn an element into editable Aloha continuous text -->
<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/vendor/jquery-1.7.1.js"></script>
<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/require.js"></script>

<link href="<?=$alohaeditor_cdn?>css/aloha.css" type="text/css" rel="stylesheet" />
<script>
	var Aloha = window.Aloha || ( window.Aloha = {} );
	// no settings for this demo
	Aloha.settings = {
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
		                        common/undo,
		                        common/contenthandler,
		                        common/paste,
		                        common/commands,
		                        common/abbr"></script>

<!-- turn an element into editable Aloha continuous text -->
<script type="text/javascript">
Aloha.ready(function() {
	// mark the editable parts
	$('.aloha').aloha();
});

</script>


<link rel="stylesheet" href="./isocube_files/demo.css" type="text/css">

<style type="text/css" media="screen">
body {
    background: #090;
    text-align: center;
    font-family: sans-serif;
}

a {
    color: #6f6;
}

a:hover {
    text-decoration: none;
}

#backdrop {
    width: 600px;
    color: #0f0;
    font-family: monospace;
    font-size: 24px;
    margin: 0 auto;
    -webkit-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -ms-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -moz-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -o-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
}

.cube {
    position: absolute;
    top: 90px;
    left: 360px;
}

.face {
    position: absolute;
    width: 200px;
    height: 200px;
    overflow: hidden;
    font-family: monospace;
    font-size: 24px;
}


.top {
    top: 0;
    left: 86px;
    background: #fff;
    color: #999;
    /*    -webkit-transform: matrix(0.8965754721680534, -0.5176380902050416, 0.8965754721680536, 0.5176380902050415, 0, 0);*/
    -webkit-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -ms-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -moz-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -o-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
}

.left {
    top: 165px;
    left: 0;
    background: #999;
    color: #333;
    /*    -webkit-transform: matrix(0.8965754721680536, 0.5176380902050415, 0, 1.035276180410083, 0, 0);*/
    -webkit-transform: rotate(30deg) skewX(30deg) skewY(0deg);
    -ms-transform: rotate(30deg) skewX(30deg) skewY(0deg);
    -moz-transform: rotate(30deg) skewX(30deg) skewY(0deg);
    -o-transform: rotate(30deg) skewX(30deg) skewY(0deg);
    transform: rotate(30deg) skewX(30deg) skewY(0deg);
}

.right {
    top: 165px;
    left: 172px;
    background: #ccc;
    color: #666;
    /*    -webkit-transform: matrix(0.8965754721680536, -0.5176380902050415, 0, 1.035276180410083, 0, 0);*/
    -webkit-transform: rotate(-30deg) skewX(-30deg) skewY(0deg);
    -ms-transform: rotate(-30deg) skewX(-30deg) skewY(0deg);
    -moz-transform: rotate(-30deg) skewX(-30deg) skewY(0deg);
    -o-transform: rotate(-30deg) skewX(-30deg) skewY(0deg);
    transform: rotate(-30deg) skewX(-30deg) skewY(0deg);
}


.shadow {
    top: 330px;
    left: -86px;
    background: black;
    opacity: 0.5;
    -webkit-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -ms-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -moz-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    -o-transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
    transform: rotate(-30deg) skewX(30deg) skewY(0deg) scaleY(0.87);
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
</style>
</head>

<body>

	<div class="badgestronaut">
	    <p><a href="http://www.zachstronaut.com/" data-bitly-type="bitly_hover_card">This HTML5 and CSS3 demo was created by zachstronaut.</a></p>

	</div>


    
<div id="backdrop">
<div class="aloha green">
<a href="http://www.zachstronaut.com/">Zachstronaut</a> did some great work with css3.
<h1>Aloha Editor is better</h1>
Aloha Editor allows you to edit content you would never imagine you can.
It is the world's first full featured Editor that allows you to edit 
dynamic content live and in place. 

<h2>WYSIWYG for dynamic content</h2>
Aloha Editor allows you to edit content you would never have thought you can.
You can edit content directly in content accordions, sliders, tickers, 
captions or descriptions of images in slideshows. It is the worlds first full
featured editor that allows you to edit dynamic content live and in place.

</div>
</div>

<div class="cube">
    <div class="face top aloha">
Aloha Editor allows you to edit content you would never imagine you can.
It is the world's first full featured Editor that allows you to edit 
dynamic content live and in place.
    </div>
    <div class="face left">
    <video autoplay>  
      <source src="http://www.zachstronaut.com/lab/test.ogg" type="video/ogg">
      <source src="http://www.zachstronaut.com/lab/test.mov">
      Your browser does not support the <code>video</code> element.  
    </video>
    </div>
    <div class="face right aloha">
<h4>Aloha Editor</h4> allows you to edit content you would never imagine you can.
It is the world's first full featured Editor that allows you to edit 
dynamic content live and in place.
     </div>
    <div class="face shadow"></div>
</div>

<div id="two" class="cube">
    <div class="face top aloha">
Aloha Editor allows you to edit content you would never imagine you can.
It is the world's first full featured Editor that allows you to edit 
dynamic content live and in place.
    </div>
    <div class="face left aloha">
Aloha Editor allows you to edit content you would never imagine you can.
It is the world's first full featured Editor that allows you to edit 
dynamic content live and in place.
    </div>
    <div class="face right aloha">
Aloha Editor allows you to edit content you would never imagine you can.
It is the world's first full featured Editor that allows you to edit 
dynamic content live and in place.
    </div>
    <div class="face shadow"></div>
</div>

<p><em>Created by <a href="http://www.zachstronaut.com/" data-bitly-type="bitly_hover_card">Zachary Johnson</a>.  Originally published on my old site <a href="http://tech.no.logi.es/woodshop/" data-bitly-type="bitly_hover_card">tech.no.logi.es</a> in February 2009.</em></p>


</body>
</html>
