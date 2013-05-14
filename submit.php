<?php

/* config start */

$emailAddress = 'aloha@gentics.com';
$ticketAddress = 'sales-support@gentics.com';

/* config end */

require "phpmailer/class.phpmailer.php";

session_name("fancyform");
session_start();

foreach($_POST as $k=>$v)
{
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
}

$err = array();

if(!checkLen('name'))
	$err[]='The name field is too short or empty!';

if(!checkLen('email'))
	$err[]='The email field is too short or empty!';
else if(!checkEmail($_POST['email']))
	$err[]='Your email is not valid!';

if(!checkLen('subject'))
	$err[]='You have not selected a subject!';

if(!checkLen('message'))
	$err[]='The message field is too short or empty!';

if((int)$_POST['captcha'] != $_SESSION['expect'])
	$err[]='The captcha code is wrong!';

if(count($err))
{
	if($_POST['ajax'])
	{
		echo '-1';
	}

	else if($_SERVER['HTTP_REFERER'])
	{
		$_SESSION['errStr'] = implode('<br />',$err);
		$_SESSION['post']=$_POST;
		
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	exit;
}

$msg=
'Name:	'.$_POST['name'].'<br />
Email:	'.$_POST['email'].'<br />
IP:	'.$_SERVER['REMOTE_ADDR'].'<br /><br />

Message:<br /><br />

'.nl2br($_POST['message']).'

';


$mail = new PHPMailer();
$mail->IsMail();

if ($_POST['subject'] == 'I want to buy a commercial license' ) {
	$mail->AddAddress($ticketAddress);
} else {
	$mail->AddAddress($emailAddress);
}
$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->SetFrom($_POST['email'], $_POST['name']);
$mail->Subject = "ALOHA: ".mb_strtolower($_POST['subject'])." FROM ".$_POST['name']." ";

$mail->MsgHTML($msg);

$mail->Send();

if ($_POST['subject'] == 'I want to buy a commercial license' )
{

$mail2 = new PHPMailer();
$mail2->IsMail();

$mail2->AddAddress($_POST['email'], $_POST['name']);
$mail2->AddReplyTo($emailAddress);
$mail2->SetFrom($emailAddress);
$mail2->Subject = "ALOHA: ".mb_strtolower($_POST['subject'])." instant-reply";
$msg2 = "Aloha " . $_POST['name'] . "

We are excited that you are thinking to support the development and the community of Aloha Editor by buying a commercial license.  To give you information regarding the commercial license of Aloha Editor as fast as possible we are sending you this automated reply. If you have feedback or further questions, please do not hesitate to contact me.

<b>Do I need a commercial license of Aloha Editor?</b>
Aloha Editor is licensed under GPLv2 as well as under a commercial license. GPlv2 allows in a lot of cases to be used within commercial projects. Please check first if you can use a GPLv2 license in your commercial project. You can <also find further information in our Aloha Editor GPL License FAQ <a target=\"_blank\" href=\"http://www.aloha-editor.org/license-faq.php\">http://aloha-editor.org/license-faq.php</a>
If you still unsure consult a lawyer or a expert regarding Open Source licenses you trust.


<b>What are the Aloha Editor commercial license models and prices?</b>

There are two commercial licenses for Aloha Editor available:

<em>1. Aloha Editor 'oia license (for up to 2 developers)</em>
This license allows you to distribute your project/product bundled with Aloha Editor worldwide without limitation regarding number of sales/installations.

The license is covering up to 2 developers and is valid for one year. By using the commercial license you have no obligation for publishing source code as stated in the GPLv2 or later license.

These are subject to a individual inquiry and individual license terms according to the project. no need for publishing source code as stated in the GPLv2 or later license.

The license price is € 990 per year (exl. VAT)

If you want to buy this license, please contact me for proceeding your order


<em>2. Aloha Editor 'nui license (more than 2 developers)</em>
This license allows you to distribute your project/product bundled with Aloha Editor worldwide without limitation regarding number of sales/installations.

The license is covering more than 2 developers and is valid for one year. By using the commercial license you have no obligation for publishing source code as stated in the GPLv2 or later license.

This license is subject to a individual inquiry and individual license terms according to your project. In this case please contact me for receiving an individual offer.

There is optional premium support (one 2 one support) for commercial licenses, if you are interested please contact me.


best greetings,
Manuel Aghamanoukjan


--
Gentics Software GmbH
Aloha Editor License Manager
m.aghamanoukjan@gentics.com
<a target=\"_blank\" href=\"http://www.aloha-editor.com\">http://www.gentics.com</a>
<a target=\"_blank\" href=\"http://about.me/aghamanoukjan\">http://about.me/aghamanoukjan</a>

";

$mail2->MsgHTML(nl2br($msg2));

$mail2->Send();

}

unset($_SESSION['post']);

if($_POST['ajax'])
{
	echo '1';
}
else
{
	$_SESSION['sent']=1;
	
	if($_SERVER['HTTP_REFERER'])
		header('Location: '.$_SERVER['HTTP_REFERER']);
	
	exit;
}

function checkLen($str,$len=2)
{
	return isset($_POST[$str]) && mb_strlen(strip_tags($_POST[$str]),"utf-8") > $len;
}

function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}

?>
