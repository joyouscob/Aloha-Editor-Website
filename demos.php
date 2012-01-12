<? 

include('inc/header.inc'); 

$browser = @get_browser(null, true);
$support = true;

if ( $browser['browser'] == 'IE'  ) {
	$support = false;
}

?>

</head>

<body>

	<div id="wrapper" class="container_20">

<? include('inc/menu.inc'); ?>

		<div id="teaser1" class="container_20">

			<div class="grid_20">
				<h1>Aloha Editor Demos</h1>
				<p>
					Try our demos and feel the Aloha Editor Experience.<br />
					<i>Please note that some examples are highly experimental to show the future possibilites.</i>
				</p>
				<p>&nbsp;</p>
			</div>

	 		<div class="clear"></div>
		</div>

		<div id="teaser2" class="container_20 clickteaser" <?php if ($support) { ?>onclick="window.location.href='<?=$path?>demos/3col/';"<?php } ?> >
			<div class="grid_14">
				<h2>Aloha Web2Print</h2>
				<p>Aloha Editor can edit any content a browser can render. The Moby Dick example was developed by <a href="http://www.kmsm.ca/"> Joshua Kelly</a> as part of a CSS3 multi column layout tutorial. Additionally you can see how Aloha Editor can edit text with fonts you don't have installed on your computer.</p>
				<?php if ($support) { ?><a href="<?=$path?>demos/3col/">Try it out.</a>
				<?php } else { ?><span style="color:red">Internet Explorer does not support this CSS3 feature. Use another browser to test this example.</span><?php } ?>
			</div>
			<div class="grid_6">
				<img alt="" src="images/moby.png" style="width:220px">
			</div>
	 		<div class="clear"></div>
		</div>
		
		<div id="teaser3" class="container_20 clickteaser" onclick="window.location.href='<?=$path?>demos/wordpress-demo/';">
			<div class="grid_6">
				<img alt="" src="images/wordpress.png" style="width:220px">
			</div>
			<div class="grid_14">
				<h2>Aloha Blog</h2>
				<p>Aloha Editor in a Wordpress Blog. What if you could edit or write your blog post right where it will appear? It could be as easy as this to change content and see the result immediately. Forget about Wordpress's preview function. Aloha Editor lets you edit the final result.</p>
				<a href="<?=$path?>demos/wordpress-demo/">Try it out.</a>
			</div>
	 		<div class="clear"></div>
		</div>
		
		<div id="teaser4" class="container_20 clickteaser"  onclick="window.location.href='<?=$path?>demos/960-fluid-demo/';">
			<div class="grid_14">
				<h2>Aloha Dynamic Content</h2>
				<p>9 instances of Aloha Editor in 1 page. Feel how fast Aloha Editor loads all instances. The content elements are dynamic and you can edit them. Try out the content accordion or open and close the portlets. This is a unique experience. No other full-featured editor can do this!</p>
				<a href="<?=$path?>demos/960-fluid-demo/">Try it out.</a>
			</div>
			<div class="grid_6">
				<img alt="" src="images/960.png" style="width:220px">
			</div>
	 		<div class="clear"></div>
		</div>

		<div id="teaser5" class="container_20 clickteaser"  onclick="window.location.href='<?=$path?>demos/aloha-world-example/';">
			<div class="grid_6">
				<img alt="" src="images/aloha-world.png" style="width:260px">
			</div>
			<div class="grid_14">
				<h2>Aloha World</h2>
				<p>This Aloha Editor demo shows how the editor is configured. The example feels like Google docs, but comes with 3 editables featuring different configurations. Developers, look at the source.</p>
				<a href="<?=$path?>demos/aloha-world-example/">Try it out.</a>
			</div>
	 		<div class="clear"></div>
		</div>

		<div id="teaser6" class="container_20 clickteaser" <?php if ($support) { ?>onclick="window.location.href='<?=$path?>demos/css3/';"<?php } ?> >
			<div class="grid_14">
				<h2>Aloha Magics Cubes</h2>
				<p>The magic cube is a CSS3 implementation of <a href="http://www.zachstronaut.com/">Zachary Johnson</a>. You can edit content 
				which usaually is not editable directly in desktop applications. Play around and try now how you can edit in future.</p>
				<?php if ($support) { ?><a href="<?=$path?>demos/css3/">Try it out.</a>
				<?php } else { ?><span style="color:red">Internet Explorer does not support this CSS3 feature. Use another browser to test this example.</span><?php } ?>
			</div>
			<div class="grid_6">
				<img alt="" src="images/cube.png" style="width:220px">
			</div>
	 		<div class="clear"></div>
		</div>
		
<? include('inc/footer.inc'); ?>

	</div>

</body>
</html>
