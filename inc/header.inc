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

<? $aloha_path='/aloha-0.9.3/'; ?>

<?php if ( $_SERVER[PHP_SELF] == '/index.php' || $_SERVER[PHP_SELF] == '/index.new.php' ) { ?>

	<script>GENTICS_Aloha_base="<?=$aloha_path?>aloha/";</script>
	<script type="text/javascript" src="<?=$aloha_path?>debug/aloha.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.Format/plugin.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.Table/plugin.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.List/plugin.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.Link/plugin.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.HighlightEditables/plugin.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.Link/delicious.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.Link/LinkList.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.Paste/plugin.js"></script>
	<script type="text/javascript" src="<?=$aloha_path?>aloha/plugins/com.gentics.aloha.plugins.Paste/wordpastehandler.js"></script>
<?php } ?>
	<script>
	$(document).ready(function() {
		$('.new').append('<span class="newbadge"></span>');
	});
	</script>
