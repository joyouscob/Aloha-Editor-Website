<?
session_start();

/**
* Will store the posted content into currently active session.
*/
function storePost() {
  $_SESSION[$_POST['id']]=$_POST['content'];
  exit;
}

/**
* Initializes the session with default values.
*/
function initSession() {
  if(! isSet( $_SESSION["content1"])) {
    $_SESSION["content1"]='Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.';
    $_SESSION["content2"]='Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.';
    $_SESSION["content3"]='At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.';
  }
}

/**
* Transforms session values into a set of div's 
*/
function showContents() {
  while (list($key, $value) = each($_SESSION)) {
    if(preg_match("/content.*/i",$key)) {
		echo '<div id="'. $key .'">' . $value . '</div><br/>';
    }
  }
}

/**
* Handle commands
*/
if ( $_GET['cmd']=='save' ) {
	storePost();
}
initSession();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Aloha Editor - The HTML5 Editor Benchmark</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<script type="text/javascript" src="/aloha/aloha/aloha.js"></script>
    <script type="text/javascript" src="/aloha/aloha/plugins/com.gentics.aloha.plugins.Format/plugin.js"></script>
    <script type="text/javascript" src="/aloha/aloha/plugins/com.gentics.aloha.plugins.Table/plugin.js"></script>
    <script type="text/javascript" src="/aloha/aloha/plugins/com.gentics.aloha.plugins.List/plugin.js"></script>

	<script type="text/javascript">
	function saveEditable(a, b) {
		$.post("?cmd=save", { content: b.editable.getContents(), id: b.editable.getId() } );
	}

	GENTICS.Aloha.settings = {
		"i18n": {"current": "en"},
		"ribbon": false,
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
		$('#content1').aloha();
		$('#content2').aloha();
		$('#content3').aloha();
	});

	GENTICS.Aloha.EventRegistry.subscribe(GENTICS.Aloha, "editableDeactivated", saveEditable);
 
</script>
</head>
<body>
<h1>Aloha Editor - Test</h1>
<?
showContents();
?>
</body>
</html>
