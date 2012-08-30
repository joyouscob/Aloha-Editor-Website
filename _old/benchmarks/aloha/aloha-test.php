<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Aloha Editor - The HTML5 Editor Benchmark</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<script type="text/javascript" src="/aloha/aloha/aloha.js"></script>
        <script type="text/javascript" src="/aloha/aloha/plugins/com.gentics.aloha.plugins.Format/plugin.js"></script>
        <script type="text/javascript" src="/aloha/aloha/plugins/com.gentics.aloha.plugins.Table/plugin.js"></script>
        <script type="text/javascript" src="/aloha/aloha/plugins/com.gentics.aloha.plugins.List/plugin.js"></script>

	<!-- turn an element into editable Aloha coninous text -->
	<script type="text/javascript">
	GENTICS.Aloha.settings = {
		"i18n": {"current": "en"},
		"plugins": { 
			"com.gentics.aloha.plugins.GCN": { 
				"enabled": false 
			},
		 	"com.gentics.aloha.plugins.Format": { 
				config : [ 'b', 'i','u','del','sub','sup', 'p', 'title', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'pre', 'removeFormat'],
			} 
	 	}
	};

	$(document).ready(function() {
		$('#rockme').aloha();
		$('#again').aloha();
		$('#gimmemore').aloha();
	});  
	</script>
</head>

<body style="padding:1em;">
        <h1>Aloha Editor - Test</h1>
	<div id="wrapper" class="container_20">

		<div id="header" class="container_20">

			<div class="grid_20">
				The time is measured from the first GET request until the last preview is finished. All processing times are messured (even network latency) as this is the actual user experience.
				<h2>Fast</h2>
				<div id="rockme">Aloha Editor is loaded when you load your website. If you want to start editing you do not need to reload the website with an old style rich text editor. Loading common rich text editors need to reload the website or come with a popup. Both actions are boring and take some time to process. Time you better invest in editing. When you finished editing you want to see the result and need to preview. This needs more time. More boring. With Aloha Editor you work in the final result so you do not need to load any thing or preview anything. You see what you get doing it.
				</div>
				<h2>Faster</h2>
				<div id="again">Aloha Editor is loaded when you load your website. If you want to start editing you do not need to reload the website with an old style rich text editor. Loading common rich text editors need to reload the website or come with a popup. Both actions are boring and take some time to process. Time you better invest in editing. When you finished editing you want to see the result and need to preview. This needs more time. More boring. With Aloha Editor you work in the final result so you do not need to load any thing or preview anything. You see what you get doing it.
				</div>
				<h2>Aloha</h2>
				<div id="gimmemore">Aloha Editor is loaded when you load your website. If you want to start editing you do not need to reload the website with an old style rich text editor. Loading common rich text editors need to reload the website or come with a popup. Both actions are boring and take some time to process. Time you better invest in editing. When you finished editing you want to see the result and need to preview. This needs more time. More boring. With Aloha Editor you work in the final result so you do not need to load any thing or preview anything. You see what you get doing it.
				</div>
			</div>
			<div class="clear"></div>

		</div>

	</div>
</body>
</html>
