<?php

ini_set( 'display_errors', true);

//error handler function
function customError($errno, $errstr)
  {
  echo "<b>Error:</b> [$errno] $errstr";
  }

//set error handler
set_error_handler("customError");

require_once 'facebook-php-sdk/src/facebook.php';
require_once 'translate_properties.php';

// Create Application instance.
$facebook = new Facebook(array(
  'appId'  => '147787611913077',
  'secret' => 'e7294b14e0c2442e457f370c663427d4',
  'cookie' => true,
));

// We may or may not have this data based on a $_GET or $_COOKIE based session.
//
// If we get a session here, it means we found a correctly signed session using
// the Application Secret only Facebook and the Application know. We dont know
// if it is still valid until we make an API call using the session. A session
// can become invalid if it has already expired (should not be getting the
// session back in this case) or if the user logged out of Facebook.
$session = $facebook->getSession();

$me = null;
// Session based API call.
if ($session) {
  try {
    $uid = $facebook->getUser();
    $me = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
  }
}

// login or logout url will be needed depending on current user state.
if ($me) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<title>Aloha Editor - The HTML5 contenteditable Editor is easier, faster, better.</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	
	<meta property="og:title" content="The HTML5 Editor"/>
	<meta property="og:site_name" content="Aloha Editor"/>
	<meta property="og:type" content="product">
	<meta property="og:image" content="http://aloha-editor.com/images/aloha-editor-logo.png"/>
	<meta property="og:url" content="http://aloha-editor.com/"/>
	<meta property="og:description" content="The world's most advanced browser based Editor let's you experience a whole new way of editing. It’s faster than existing technologies and offers unprecedented functionalities."/>

	<meta property="og:latitude" content="48.214994"/>
	<meta property="og:longitude" content="16.370702"/>
	<meta property="og:street-address" content="Gonzagagasse 11/25"/>
	<meta property="og:locality" content="Vienna"/>
	<meta property="og:region" content="V"/>
	<meta property="og:postal-code" content="1010"/>
	<meta property="og:country-name" content="Austria"/>	

	<meta property="og:email" content="info@aloha-editor.com"/>
	<meta property="og:phone_number" content="+43-1-7109904"/>
	<meta property="og:fax_number" content="+43-1-71099044"/>

	<link href="../styles/chart.css" type="text/css" rel="stylesheet" />
	<link href="../styles/reset.css" type="text/css" rel="stylesheet" />
	<link href="../styles/grid_960.css" type="text/css" rel="stylesheet" />
	<link href="../styles/mainstyle.css" type="text/css" rel="stylesheet" />

	<script type="text/javascript" src="aloha-nightly/aloha/aloha.js"></script>
	<script type="text/javascript" src="aloha-nightly/aloha/plugins/com.gentics.aloha.plugins.Format/plugin.js"></script>
	<script type="text/javascript" src="aloha-nightly/aloha/plugins/com.gentics.aloha.plugins.Table/plugin.js"></script>
	<script type="text/javascript" src="aloha-nightly/aloha/plugins/com.gentics.aloha.plugins.List/plugin.js"></script>

	<!-- turn an element into editable Aloha continuous text -->
	<script type="text/javascript">
	GENTICS.Aloha.settings = {
		"ribbon": false,
		"i18n": {"current": "en"},
		"plugins": { 
		 	"com.gentics.aloha.plugins.Format": { 
				config : [ ]
			}, 
		 	"com.gentics.aloha.plugins.List": { 
				config : [ ]
			},
		 	"com.gentics.aloha.plugins.Table": { 
				config : [ ]
			} 
	 	}
	};

	$(document).ready(function() {
		$('.aloha').aloha();
		$('#savetranslation').click(function(e) {
			var data = Array();
			for  ( var i = 0; i < GENTICS.Aloha.editables.length; i++) {
				var e = GENTICS.Aloha.editables[i];
				if (e.isModified()) {
					alert(e.obj.attr('data-file') + ':' + e.obj.attr('data-key') + ':' +e.getContents());
				}
				data.push({file:e.obj.attr('data-file') , key:e.obj.attr('data-key'), content:e.getContents()});
			}
			var dataString = JSON.stringify(data);
			alert('send'+dataString);
			$.post('save_dict.php', { data: dataString}, showResult, "text");
		});
	});  
	function showResult(res)
	{
	  alert('get:'+ res);
	  var obj = JSON.parse(res);
	  $("#sales1Lastname").html("Lastname of sales[1]: " +obj.sales[1].lastname);
	}
	</script>
</head>

<body>

  <!--
      We use the JS SDK to provide a richer user experience. For more info,
      look here: http://github.com/facebook/connect-js
    -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId   : '<?php echo $facebook->getAppId(); ?>',
          session : <?php echo json_encode($session); ?>, // don't refetch the session when PHP already has it
          status  : true, // check login status
          cookie  : true, // enable cookies to allow the server to access the session
          xfbml   : true // parse XFBML
        });

        // whenever the user logs in, we refresh the page
        FB.Event.subscribe('auth.login', function() {
          window.location.reload();
        });
      };

      (function() {
        var e = document.createElement('script');
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>

	<div id="wrapper" class="container_20">

<?php if ($me): ?>	
		<div class="container_20">
			<div class="grid_20">
				<span style="float:right; font-size: 75%; color:#666;">Hello <?=$me['first_name']?>, you are logged in via facebook. If you <a href="<?=$logoutUrl?>">logout</a> you are logged out on facebook too.</span></p>
			</div>
			<div class="clear"></div>
		</div>
<?php endif; ?>
		<div id="header" class="container_20">
			<div class="grid_13">
				<div class="logo">
					<img src="../images/aloha-editor-logo.png" alt="Logo" />
				</div>
				<ul class="topnav">
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="demos.html" title="Demos">Demos</a></li>
					<li><a href="features.html" title="Features">Features</a></li>
					<li><a href="support.html" title="Support">Support</a></li>
				</ul>
			</div>
			<div class="grid_1">&nbsp;</div>
			<div class="grid_6">
				<ul class="topnav" style="float:right">
					<li><a href="wiki/" title="Developers">Developer's Wiki</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="container_20" style="padding-top:30px">
			<div class="grid_20">
				<h2>Translator Community.</h2>
<?php if ($me): ?>	
				<p>Thank you <?=$me['first_name']?> for helping make this green!<br />
<?php else: ?>
				<p>Howdy, join the Aloha Editor team as translator!</p>
				<p>Just <a href="<?=$loginUrl?>">login</a> via facebook and start translating. &nbsp;<a href="<?php echo $loginUrl; ?>" style="border: none;"><img src="fb_login.png"></a></p>
<?php endif ?>             
			</div>
			<div class="clear"></div>
		</div>
		<div class="container_20" style="padding-top:30px">
			<div class="grid_20">
<?
if ( !in_array($lang, $languages) ) {
	$lang = 'de';
}

asort($languages);
echo "<p style='font-size:90%'>";
foreach ($languages as $l) {
	echo "<a href='?lang=$l' style='color:";
	if (check_lanugage($l) == -1) {
		echo "red";
	} else if (check_lanugage($l) == 1) {
		echo "orange";
	} else {
		echo "green";
	}
	echo "'>$l</a>|";
}
echo "<br><br></p>";

if ( $me ) {
	$class = " class='aloha'";
} else {
	$class = '';
}

echo "<table>";
echo "<tr><th>keyname</th><th>en</th><th>$lang</th</tr>";
foreach ($dict_entries['en'] as $package => $pinfo) {
	if ( array_key_exists('entries', $pinfo) && is_array($pinfo['entries']) ) {
		echo "<tr><th colspan=3>$package</th></tr>";
		foreach ($pinfo['entries'] as $k => $v) {
			$v_lang = '';
			if ( array_key_exists($lang, $dict_entries) 
				&& array_key_exists($package, $dict_entries[$lang]) 
				&& array_key_exists($k, $dict_entries[$lang][$package]['entries']) ){
				$v_lang = $dict_entries[$lang][$package]['entries'][$k];
			}
			echo "<tr><td>$k</td><td>$v</td><td $class data-file='$pinfo[file]' data-key='$k'>$v_lang</td></tr>";
		}
	}
}
echo "</table>";
?>
<p><br /></p>
<p style="float:right">
<button id="savetranslation"><span style="font-size:150%">Save the translation</span></button>
</p>	
<p><br /></p>
<p><br /></p>
<p><br /></p>
			</div>
			<div class="clear"></div>
		</div>
		<div id="footer" class="container_20">

			<div class="grid_10">
				Copyright &copy; Gentics Software GmbH. All rights reserved.
			</div>
			<div class="grid_10 text-right">
				<div class="float-right">
					<ul class="service-nav">
						<li><a href="terms.html" title="terms">terms</a></li>
						<li><a href="privacy.html" title="privacy">privacy</a></li>
						<li class="last">powered by
						<a href="http://www.gentics.com"><img id="genticslogo" src="../images/gentics-logo.png" alt="Gentics Software GmbH" title="Gentics Software GmbH"/></a></li>
					</u>
				</div>
			</div>

			<div class="clear"></div>

		</div>

	</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17460389-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
