<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en"> 
<head>
	<title>Aloha Editor - HTML5 WYSIWYG Editor</title>
	<meta name="google-site-verification" content="OcKTJn-MVA-te89IMcfpfXQPDL1ea14vDEMQONq9iWc" />
	<meta name="google-site-verification" content="Wis-PHVdKww2BGLGMLt2uF_m4lpPC_hqG10Tp3jJ_Hs" />
	<meta name="google-site-verification" content="KElOaH_U2LOCcCipQ9JGxEaRok9Mq0K-dLZkVoY6XjE" />
	<meta name="google-site-verification" content="wF_Dg1xnxqgKrWdKF5nvw8khg5XsnRd7xHCkz8dHHw8" />
	
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<meta name="keywords" content="HTML5, HTML5 Editor, WYSIWYG, Editor, WYSIWYG Editor, RTE, Richtext, Richtext Editor" />
	<meta name="description" content="World's most advanced HTML5 WYSIWYG Editor gives you a total new experience when editing. It's faster than existing WYSIWYG technologies and offers unprecedented WYSIWYG functionalities."/>

	<link href="/styles/reset.css" type="text/css" rel="stylesheet" />
	<link href="/styles/grid_960.css" type="text/css" rel="stylesheet" />
	<link href="/styles/mainstyle.css" type="text/css" rel="stylesheet" />

<?php
require_once './inc/version.inc';
$path = '/';
?>

<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/vendor/jquery-1.7.2.js"></script>
<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/require.js"></script>


<?php if ( $_SERVER['SCRIPT_NAME'] == '/index.php' || 
			$_SERVER['SCRIPT_NAME'] == '/features.php' ) { ?>
	<link href="<?=$alohaeditor_cdn?>css/aloha.css" type="text/css" rel="stylesheet" />

	<script>
		var Aloha = window.Aloha || ( window.Aloha = {} );
		
		Aloha.settings = {
			logLevels: { 'error': true, 'warn': true, 'info': true, 'debug': false, 'deprecated': true },
			errorhandling: false,
			ribbon: {enable: true},
			locale: 'en',
			plugins: {
				format: {
					config: [  'b', 'i', 'p', 'sub', 'sup', 'del', 'title', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'pre', 'removeFormat' ]
				}
			},
			sidebar: {
				disabled: true
			}
		};
	</script>


    <script>
		//Aloha.settings.jQuery = $.noConflict(true);
		Aloha.settings.jQuery = $;
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
			                        common/characterpicker,
			                        common/commands,
			                        extra/flag-icons,
			                        common/abbr"></script>
<?php } ?>
	
	<script>
	$(document).ready(function() {
		$('.new').append('<span class="newbadge"></span>');
	});
	</script>
