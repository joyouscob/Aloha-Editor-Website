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
	$success='<h1>Thank you for buying an Aloha Editor license or service!</h1><br />Your Aloha Editor team.';
	
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
			
				<h2>Your license information</h2>
				<p>add CRM form here?? &nbsp;</p>

<?php /**
AE Developer License
http://www.aloha-editor.org/license-bought-cancel.php?p=dlae1
AE Domain License
http://www.aloha-editor.org/license-bought-cancel.php?p=ddlae2
AE Developer License Premium Support
http://www.aloha-editor.org/license-bought-cancel.php?p=psdlae3
AE Domain License Premium Support
http://www.aloha-editor.org/license-bought-cancel.php?p=psddlae4

**/ ?>
				<div id="form-container">
				<form id="contact-form" name="contact-form" method="post" action="submit.php">
				      <table width="100%" border="0" cellspacing="0" cellpadding="5">
                                        <tr>
                                          <td width="15%">Product</td>
                                          <td width="70%"><?php 
if ( $_GET['p'] == 'dlae1' || !$_GET['p'] ) echo '<b>Aloha Editor Developer License</b>';
if ( $_GET['p'] == 'ddlae2' ) echo '<b>Aloha Editor Domain License</b>';
if ( $_GET['p'] == 'psdlae3' ) echo '<b>Aloha Editor Developer License Premium Support</b>';
if ( $_GET['p'] == 'psddlae4' ) echo '<b>Aloha Editor Domain License Premium Support</b>';

?>
                                          <td width="15"></td>
                                        </tr>

<?php if ( $_GET['p'] == 'dlae1' || $_GET['p'] == 'ddlae2' ) { ?>
				        <tr>
					  <td width="15%">License key</td>
					  <td width="70%"><?php $lk = md5(rand(0,100000000)); echo $lk; ?><input type="hidden" name="licensekey" value="<?php echo $lk; ?>" /></td>
					  <td width="15"></td>
					</tr>
<?php } ?>
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
				          <td><label for="subject">Domain</label></td>
				          <td><input type="text" class="validate[required,custom[domain]]" name="domain" id="domain" value="<?=$_SESSION['post']['domain']?>" /></td>
				          <td>&nbsp;</td>
				        </tr>
				        <tr>
				          <td valign="top"><label for="message">Comment</label></td>
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
