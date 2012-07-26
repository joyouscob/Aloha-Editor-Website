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
$msg2 = "Aloha " . $_POST['name'] . ",

because most of the requests are about investments in a commercial license of Aloha Editor, we send you this second, instant, automatic reply with the most important information about commercial licenses. If you have further questions, please do not hesitate to contact us.

If you have questions about how to interprete the licenses of Aloha Editor, please read this <a target=\"_blank\" href=\"http://www.aloha-editor.org/license-faq.php\">http://www.aloha-editor.org/license-faq.php</a>

Thanks for thinking about using Aloha Editor, we have three different license models. I'm sending you the information regarding these models.

<b>A. Aloha Editor developer license:</b>
yearly license fee per developer: EUR 195,-
includes access to community support forum and Software updates for one year for one developer working with Aloha Editor Code
no need for publishing source code as stated in the GPLv2 or later license

<b>B. Aloha Editor domain license:</b>
yearly license fee per domain: EUR 425,- (1 domain, maximum 1 mio uniqe clients per month)
includes access to community support forum members
and all updates for one year for all developer working with Aloha Editor Code for this domain.
no need for publishing source code as stated in the GPLv2 or later license

<b>C. Aloha Editor OEM license:</b>
For projects where licenses above aren't suitable and where you want to deliver your product bundled with Aloha Editor for installation. These are subject to a individual inquiry and individual license terms according to the project. no need for publishing source code as stated in the GPLv2 or later license


There is optional premium support (one 2 one support) for the Aloha Editor developer (300/year) or the domain license (600/year) domain license as well.

best greetings,
Manuel Aghamanoukjan

--
Gentics Software GmbH
Sales Manager
m.aghamanoukjan@gentics.com
<a target=\"_blank\" href=\"http://www.gentics.com\">http://www.gentics.com</a>
<a target=\"_blank\" href=\"http://www.twitter.com/aghamanoukjan\">http://www.twitter.com/aghamanoukjan</a>
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
