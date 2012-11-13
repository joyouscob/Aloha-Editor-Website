<?php
session_start();

// ******
// Authentication via browserID
// ******
$user_file = './user.json';

// user object
if (!isset($_SESSION['user']) ||
	empty($_SESSION['user']->id)) {
	$_SESSION['user'] = new StdClass();
	$_SESSION['user']->id = 'guest';
}

if (isset($_REQUEST['assertion'])) {
	$http_protocol = 'http://';
	if ($_SERVER['SERVER_PORT'] == 80) {
		$http_protocol = 'http://';
	} else if ($_SERVER['SERVER_PORT'] == 443) {
		$http_protocol = 'https://';
	}

	// @todo use other stuff than curl via exec
	$cmd = 'curl -d "assertion='.$_REQUEST['assertion']
			.'&audience='.$http_protocol.''.$_SERVER['HTTP_HOST']
			.'" "https://browserid.org/verify"';
	$data = exec($cmd);

	// browserid auth response:
	//
	// {"status":"okay","email":"user@example.org",
	// "audience":"http://example.com","expires":1334279729067,
	// "issuer":"browserid.org"}
	if ( !empty($data) ) {
		$signin_user = json_decode($data);
		if ($signin_user->status == 'okay') {
			if (is_readable($user_file)) {
				$user_data = file_get_contents($user_file);
				$users = json_decode($user_data);
				// @todo check for valid user data
				foreach ($users as $id => $user) {
					$user = (array) $user;
					if ( $signin_user->email == $user['@id'] ) {
						$_SESSION['user'] = $signin_user;

						foreach($user as $key => $value) {
							$key = str_replace('@', '', $key);
							$_SESSION['user']->$key = $value;
						}

						echo $data;
						die();
					}
				}
			} else {
				echo json_encode('Auth: File ./user.json is not readable');
				//unset( $_SESSION['user'] );
				die();
			}

			echo json_encode('Auth: Not Authenticated.');
			unset( $_SESSION['user'] );
			die();
		}
	}
} else if ( isset($_REQUEST['logout']) ) {
	unset( $_SESSION['user'] );
	echo json_encode('Auth: Session closed');
}

?>