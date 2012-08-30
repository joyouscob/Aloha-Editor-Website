<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Another Editor - Test</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="sample.css" />
        <script type="text/javascript" src="another_editor/ckeditor.js"></script>
        <script src="sample.js" type="text/javascript"></script>
</head>
<body>
<h1>Another Editor - Test</h1>
<?

function showEditor() {
  ?>
  <form action="another_editor-test.php?id=<? echo $_GET['id'] ?>" method="post">
    <p><label for="editor">Editor:</label><br />
    <textarea class="ckeditor" cols="80" id="editor" name="editor" rows="10"> <? echo $_POST['content'] ?> </textarea>
    </p>
    <p><input type="submit" value="Submit" /></p>
  </form>
  <?
}

function initSession() {
  if(! isSet( $_SESSION["content1"])) {
    $_SESSION["content1"]='Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.';
    $_SESSION["content2"]='Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.';
    $_SESSION["content3"]='At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.';
  }
}

function showContents() {
  while (list($key, $value) = each($_SESSION)) {
    if(preg_match("/content.*/i",$key)) {
	echo $value;
	echo '<form action="another_editor-test.php?edit=true&id='. $key .'" method="post">';
	echo '<input type="hidden" name="content" value="' .htmlentities($value) . '">';
	echo '<input type="submit" value="Edit" />';
	echo '</form><br />';

    }
  }
}

function storePost() {
  $_SESSION[$_GET["id"]]=$_POST['editor'];
}

initSession();

if( isSet($_GET['edit'])) { 
  showEditor();
} else {
  storePost();
  showContents();
}


?>


</body>
</html>
