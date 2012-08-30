<?php 
 
$logFile = '/var/log/save_dict.log';

require_once 'facebook-php-sdk/src/facebook.php';

// Create Application instance.
$facebook = new Facebook(array(
  'appId'  => '147787611913077',
  'secret' => 'e7294b14e0c2442e457f370c663427d4',
  'cookie' => true,
));

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


 
header("Content-type: text/plain");

if ( $me ) {
  $res = json_decode(stripslashes($_POST['data']), true);
  error_log(time()." $me[id] \n", 3, $logFile);
  $res 
  write_property($content, $file);
  echo json_encode($res);
} else {
  error_log(time()." unauthorized request.\n", 3, $logFile);
  echo '{error: "You are not logged in."}';
}

?>
