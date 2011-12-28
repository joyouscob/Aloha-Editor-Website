<?php

require_once('fb.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<title>Aloha Editor - Appstore</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</head>

<body>
<?php if ($me): ?>	
<span style="float:right; font-size: 75%; color:#666;">Hello <?=$me['first_name']?>, you are logged in via facebook. If you <a href="<?=$logoutUrl?>">logout</a> you are logged out on facebook too.</span>
<?php endif; ?>
<?php if ($me): ?>	
				<p>Hi <?=$me['first_name']?> choose you plugins!</p>
<?php else: ?>
				<p>Howdy, configure your Editor!</p>
				<p>Just <a href="<?=$loginUrl?>">login</a> via facebook and select your plugins. &nbsp;<a href="<?php echo $loginUrl; ?>" style="border: none;"><img src="fb_login.png"></a></p>
<?php endif ?>             
</body>
</html>

