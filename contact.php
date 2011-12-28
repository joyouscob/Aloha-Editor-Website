<?php

session_name("fancyform");
session_start();

$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];

$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	//$success='<h1>Thank you!</h1><br />We\'ll reply as soon as possible.<br /><br />Your Aloha Editor team.';
	$success='<h1>Thank you!</h1><br />We\'ll reply as soon as possible. You\'ll receive an automatic reply-mail sent by our ticketsystem.<br /><br />Your Aloha Editor team.';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}

include('inc/header.inc'); 

?>

<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="/js/formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="/styles/demo.css" />
<script type="text/javascript" src="/js/jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="/js/formValidator/jquery.validationEngine.js"></script>
<?=$css?>
</head>

<body>

	<div id="wrapper" class="container_20">

<? include('inc/menu.inc'); ?>
		
		<div id="teaser" class="container_20">
			<div class="grid_20">
			
				<h2>Contact us</h2>
				<p>&nbsp;</p>
				<div id="form-container">
				<form id="contact-form" name="contact-form" method="post" action="submit.php">
				      <table width="100%" border="0" cellspacing="0" cellpadding="5">
				        <tr>
				          <td width="15%"><label for="name">Name</label></td>
				          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" /></td>
				          <td width="15%" id="errOffset">&nbsp;</td>
				        </tr>
				        <tr>
				          <td><label for="email">Email</label></td>
				          <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" /></td>
				          <td>&nbsp;</td>
				        </tr>
				        <tr>
				          <td><label for="subject">Subject</label></td>
				          <td><select name="subject" id="subject">
				            <option value="" selected="selected"> - Choose -</option>
				            <option value="I am a Javascript lover and want to join the team">I am a Javascript guru and want to join the team</option>
				            <option value="I am a cook and want to join the team">I am a cook and want to join the team</option>
				            <option value="I am a webdesigner and want to join the team">I am a webdesigner and want to join the team</option>
				            <option value="I am a translator and want to join the team">I am a translator and want to join the team</option>
				            <option value="I am a blogger and want to join the team">I am a blogger and want to join the team</option>
				            <option value="I have an unlisted question and I did check the Forum!">I have an unlisted question and I checked the Forum!</option>
				            <option value="I want to donate a million">I want to donate a million</option>
				            <option value="I want to buy a commercial license">I want to buy a commercial license</option>
				          </select>
				          </td>
				          <td>&nbsp;</td>
				        </tr>
				        <tr>
				          <td valign="top"><label for="message">Message</label></td>
				          <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea></td>
				          <td valign="top">&nbsp;</td>
				        </tr>
				        <tr>
				          <td><label for="captcha"><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label></td>
				          <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
				          <td valign="top">&nbsp;</td>
				        </tr>
				        <tr>
				          <td valign="top">&nbsp;</td>
				          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
				          <input type="reset" name="button2" id="button2" value="Reset" />
				          
				          <?=$str?>          <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
				        </tr>
				      </table>
				</form>
				<?=$success?>
				</div>	

			</div>
			<div class="clear"></div>
		</div>

<? include('inc/footer.inc'); ?>

	</div>

</body>
</html>
