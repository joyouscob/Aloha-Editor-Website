<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TinyMCE - Test</title>
<script language="javascript" type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
  tinyMCE.init({
    theme : "advanced",
    mode: "exact",
    elements : "editor",
    theme_advanced_toolbar_location : "top",
    theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,"
    + "justifyleft,justifycenter,justifyright,justifyfull,formatselect,"
    + "bullist,numlist,outdent,indent",
    theme_advanced_buttons2 : "link,unlink,anchor,image,separator,"
    +"undo,redo,cleanup,code,separator,sub,sup,charmap",
    theme_advanced_buttons3 : "tablecontrols",
    height:"350px",
    width:"600px",
    file_browser_callback : 'myFileBrowser',
    plugins : "table",
    theme_advanced_buttons3_add : "tablecontrols",
    table_styles : "Header 1=header1;Header 2=header2;Header 3=header3",
    table_cell_styles : "Header 1=header1;Header 2=header2;Header 3=header3;Table Cell=tableCel1",
    table_row_styles : "Header 1=header1;Header 2=header2;Header 3=header3;Table Row=tableRow1",
    table_cell_limit : 100,
    table_row_limit : 5,
    table_col_limit : 5

  });

  function myFileBrowser (field_name, url, type, win) {
    var fileBrowserWindow = new Array();
    fileBrowserWindow['title'] = 'File Browser';
    fileBrowserWindow['file'] = "tinymce-test.php" + "?type=" + type;
    fileBrowserWindow['width'] = '420';
    fileBrowserWindow['height'] = '400';
    tinyMCE.openWindow(fileBrowserWindow, { window : win, resizable : 'yes', inline : 'yes' });
    return false;
  }
</script>
</head>
<body>
<h1>TinyMCE - Test</h1>

<?

$allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
$allowedTags.='<li><ol><ul><span><div><br><ins><del>';

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
        echo '<form action="tinymce-test.php?edit=true&id='. $key .'" method="post">';
        echo '<input type="hidden" name="content" value="' .htmlentities($value) . '">';
        echo '<input type="submit" value="Edit" />';
        echo '</form><br />';

    }
  }
}

function showEditor() {
  ?>
  <form method="post" action="tinymce-test.php?id=<?=$_GET['id']?>">
  <textarea id="editor" name="editor" rows="15" cols="80"><?=$_POST['content']?></textarea>
  <br />
  <input type="submit" name="save" value="Submit" />
  <input type="reset" name="reset" value="Reset" />
  </form>
  <?
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
