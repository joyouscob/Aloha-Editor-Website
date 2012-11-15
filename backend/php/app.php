<?php
session_start();

$jquery_url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js';
$jquery = '
	<script src="'.$jquery_url.'"></script>
';

$browserid = '
	<script src="http://browserid.org/include.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(function() {
		$("#browserid").click(function() {
			navigator.id.get(gotAssertion);
			return false;
		});
	});

	function gotAssertion(assertion) {
		// got an assertion, now send it up to the server for verification
		if (assertion !== null) {
			$.ajax({
				type: "POST",
				url: "./php/auth.php",
				data: { assertion: assertion },
				success: function(res, status, xhr) {
					checkLogin(res);
				},
				error: function(res, status, xhr) {
					if (window.console) {
						window.console.log("login failure" + res);
					}
				}
			});
		} else {
			//loggedOut();
		}
	}

	function checkLogin(res) {
		var obj = jQuery.parseJSON(res);
		if (obj.status === "okay") {
			document.location.href=document.location.origin + document.location.pathname;
		}
	}
	</script>
';

$login = '
	<div id="app-authenticate">
		<span><a href="#" id="browserid" title="Sign-in with BrowserID">
			<img src="http://browserid.org/i/sign_in_blue.png" alt="Sign in" />
		</a></span>
	</div>
';

if ( isset($_REQUEST['logout']) ) {
	unset( $_SESSION['user'] );
}


if (empty($_SESSION['user']->email)) {
	$buffer = '<html><head><title></title></head><body>';
	$buffer .= '<h1>Sign-In for Aloha Editor Backend</h1>';
	$buffer .= '</body></html>';

	$buffer = str_replace( "<head>", "<head>\n\n$jquery\n\n", $buffer );
	$buffer = str_replace( "</body>", "\n\n$browserid\n\n</body>", $buffer );
	$buffer = str_replace( "</body>", "\n\n$login\n\n</body>", $buffer );
	echo $buffer;
	die();
}
