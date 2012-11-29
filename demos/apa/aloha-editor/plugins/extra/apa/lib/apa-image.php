<?php

$username = 'qstest';
$password = '4r5t6y7u';

$url = 'apaapses2.apa.at:28080/diasdb/';
$command = 'command?command=';

$connect_url = 'http://' . $username . ':' . $password . '@' . $url . $command;


$image_id = false;

if ($_REQUEST['image']) {
	$image_id = $_REQUEST['image'];
}


$path = '../img/'.$image_id.'.png';
if (file_exists($path)) {
	$data = file_get_contents($path);
	header('Content-Type: image/png');
	echo $data;
	die();
} else {

	downloadApaImage($image_id);

}


function downloadApaImage($image_id) {
	global $connect_url;

	$command = '<GET_ATTACHMENT><BILD_ID>'.$image_id.'</BILD_ID><ATTACHMENTART>PREVIEW</ATTACHMENTART><BILDGROESSE>MITTEL</BILDGROESSE><WASSERZEICHEN>false</WASSERZEICHEN><WUNSCHSPRACHE>de</WUNSCHSPRACHE></GET_ATTACHMENT>';
	
	//echo '<pre>';
	//echo "\n" . $connect_url . $command . "\n";
	//echo '</pre>';
	
	$data = @file_get_contents($connect_url . $command );
	
	if (empty($data)) {
		return false;
	}
	
	$im = imagecreatefromstring($data);
	if ($im !== false) {
		$path = '../img/'.$image_id.'.png';
		
		imagepng($im, $path);
		
		//print_r(getimagesize($path));
		/*
		(
		    [0] => 100
		    [1] => 150
		    [2] => 3
		    [3] => width="100" height="150"
		    [bits] => 8
		    [mime] => image/png
		)
		*/
		
		// return image
		header('Content-Type: image/png');
		imagepng($im);
		
		// or just path
		//imagepng($im, $path);
	    //imagedestroy($im);
		//return '/aloha-editor/plugins/extra/apa/img/'.$image_id.'.png';

		imagedestroy($im);

	} else {
	    //echo 'An error occurred downloading the image.';
		return false;

	}
	
}

?>