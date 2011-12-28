<? include('inc/header.inc'); ?>

	<!-- turn an element into editable Aloha continuous text -->
	<script type="text/javascript">
	GENTICS.Aloha.settings = {
		"ribbon": false,
		"i18n": {"current": "en"},
		"plugins": { 
		 	"com.gentics.aloha.plugins.Format": { 
				config : [ 'b', 'i','u','del','sub','sup']
			} 
	 	}
	};

	$(document).ready(function() {
		$('#JustEdit').aloha();
	});  
	</script>
</head>

<body>
	<div id="wrapper" class="container_20">

<? include('inc/menu.inc'); ?>
		
		<div id="teaser" class="container_20">
			<div class="grid_20">
				<h1>Aloha Editor Docs / Services</h1>
				
				Aloha Editor is also implemented in the Aloha Editor Docs service. 
				We offer a service for online editing of your documents with the world-wide known Aloha Editor.
				<br /><br />
				Additionally we offer development services for enhancing and improving Aloha Editor, if you use it
				in your software or application.
				<br /><br />
				<a href="mailto:aloha@gentics.com">Just contact us, please.</a>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="container_20" style="padding-top:30px">
			<div class="grid_4">
				<img alt="Plugins" src="images/plugin.png" title="" style="padding-top:0px"/>
			</div>
			<div class="grid_16">
			<h3>Service</h3>
			
			The Aloha Editor services contain:
			<ul>
				<li>implementing Aloha Editor in your application / online software</li>
				<li>development of new plugins for Aloha Editor</li>
				<li>improvement of Aloha Editor</li>
			</ul>
			
                        <h3>Docs</h3>

                        The Aloha Editor Docs is:
                        <ul>
				<li>a service based on Aloha Editor for editing documents online</li>
                        </ul>
			</div>
			<div class="clear"></div>
		</div>

<? include('inc/footer.inc'); ?>

	</div>
</body>
</html>
