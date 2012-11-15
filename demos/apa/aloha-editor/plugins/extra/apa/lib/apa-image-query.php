<?php

if (!empty($_GET['q'])) {
	$query = $_GET['q'];
}

if (empty($query)) {
	$query = 'test';
}

$username = 'qstest';
$password = '4r5t6y7u';

$url = 'apaapses2.apa.at:28080/diasdb/';
$command = 'command?command=';

$connect_url = 'http://' . $username . ':' . $password . '@' . $url . $command;

/* get list of images */
$search = '<PERFORM_QUERY><QUERY_STRING>'.$query.'</QUERY_STRING><SUCHART>GOOGLE_SYNTAX</SUCHART><WORTSTAMMSUCHE>true</WORTSTAMMSUCHE><NUTZUNGSLAND>AT</NUTZUNGSLAND><HEIKLE_BILDER>false</HEIKLE_BILDER><SORTIERREIHENFOLGE>CHRONOLOGISCH_NEUESTE_ZUERST</SORTIERREIHENFOLGE><WUNSCHSPRACHE>de</WUNSCHSPRACHE><FELDWERTE><FELDNAME>PREISART</FELDNAME><FELDNAME>HIRES_DOWNLOAD_ALLOWED</FELDNAME><FELDNAME>DATUM</FELDNAME><FELDNAME>BILD_ID_INTERN</FELDNAME><FELDNAME>BILD_ID</FELDNAME><FELDNAME>WZ_THUMBNAIL</FELDNAME><FELDNAME>HEIKEL</FELDNAME><FELDNAME>HIRES_SIZE_KB</FELDNAME><FELDNAME>MODEL_RELEASE</FELDNAME><FELDNAME>HIRES_WIDTH</FELDNAME><FELDNAME>WZ_HIRES</FELDNAME><FELDNAME>INHALT</FELDNAME><FELDNAME>TITEL</FELDNAME><FELDNAME>LIZENZART</FELDNAME><FELDNAME>CREDIT</FELDNAME><FELDNAME>STICHWORT</FELDNAME><FELDNAME>HIRES_HEIGHT</FELDNAME><FELDNAME>WZ_PREVIEW</FELDNAME><FELDNAME>SELECTION</FELDNAME></FELDWERTE><TREFFER_VON>1</TREFFER_VON><TREFFER_BIS>15</TREFFER_BIS><PRE_CLUSTER>true</PRE_CLUSTER><USER_IP>194.232.128.103</USER_IP></PERFORM_QUERY>';


$data = file_get_contents($connect_url . $search );
$xml = simplexml_load_string($data);
$apa_xml = xml2array($xml);

$images = array();

if (empty($apa_xml['children']['FELDWERTE'][0]['children']['TREFFER'])) {
	$apa_xml['children']['FELDWERTE'][0]['children']['TREFFER'] = array();
}

foreach ($apa_xml['children']['FELDWERTE'][0]['children']['TREFFER'] as $img_data) {
	$img_return = array();
	foreach ($img_data['children']['FELDWERT'] as $img) {
		$img_return[strtolower($img['attr']['feldname'])] = $img['value'];
	}
	
	// cleanup
	$img_return['titel'] = trim(preg_replace("/(.*)=$/e", "'\\1'", $img_return['titel']));
	$img_return['inhalt'] = trim(preg_replace("/(epa([0-9]+))(.*)/e", "'\\3'", trim($img_return['inhalt'])));
	
	//$img_return['url'] = downloadApaImage($img_return['bild_id_intern']);
	//downloadApaImage($img_return['bild_id']);
	$img_return['url'] = '/demos/apa/aloha-editor/plugins/extra/apa/lib/apa-image.php?image='.$img_return['bild_id_intern'];
	//$img_return['url'] = '/aloha-editor/plugins/extra/apa/img/'.$img_return['bild_id_intern'].'.png';
	$images[] = $img_return;
	
}

//print_r($images);

echo json_encode($images);


function xml2array($xml) { 
    $arXML=array(); 
    $arXML['name']=trim($xml->getName()); 
    $arXML['value']=trim((string)$xml); 
    $t=array(); 
    foreach($xml->attributes() as $name => $value){ 
        $t[$name]=trim($value); 
    } 
    $arXML['attr']=$t; 
    $t=array(); 
    foreach($xml->children() as $name => $xmlchild) { 
        $t[$name][]=xml2array($xmlchild); //FIX : For multivalued node 
    } 
    $arXML['children']=$t; 
    return($arXML); 
}


/*

        <TREFFER pos="25">
            <FELDWERT feldname="PREISART">0</FELDWERT>
            <FELDWERT feldname="HIRES_DOWNLOAD_ALLOWED">1</FELDWERT>
            <FELDWERT feldname="DATUM">2010-04-01</FELDWERT>
            <FELDWERT feldname="BILD_ID_INTERN">70661-EGRRRGWPOPPRPOGWPPASHRAOP</FELDWERT>
            <FELDWERT feldname="BILD_ID">20100401_PD0726</FELDWERT>
            <FELDWERT feldname="WZ_THUMBNAIL">0</FELDWERT>
            <FELDWERT feldname="HEIKEL">0</FELDWERT>
            <FELDWERT feldname="HIRES_SIZE_KB">3575</FELDWERT>
            <FELDWERT feldname="MODEL_RELEASE"></FELDWERT>
            <FELDWERT feldname="HIRES_WIDTH">3792</FELDWERT>
            <FELDWERT feldname="WZ_HIRES">0</FELDWERT>
            <FELDWERT feldname="INHALT">epa02100688 British Prime Minister Gordon Brown waits for the
arrival of German Chancellor Angela Merkel at Chequers Court near
Ellesborough in Buckinghamshire, Britain, 01 April 2010. The two
leaders met at Gordon Brown's country residence for talks. 
EPA/ANDY RAIN</FELDWERT>
            <FELDWERT feldname="TITEL">BRITAIN GERMANY CHANCELLOR MERKEL VISIT =</FELDWERT>
            <FELDWERT feldname="LIZENZART">1</FELDWERT>
            <FELDWERT feldname="CREDIT">ANDY RAIN / EPA / picturedesk.com</FELDWERT>
            <FELDWERT feldname="STICHWORT">DIPLOMACY</FELDWERT>
            <FELDWERT feldname="HIRES_HEIGHT">2288</FELDWERT>
            <FELDWERT feldname="WZ_PREVIEW">0</FELDWERT>
            <FELDWERT feldname="SELECTION">archive</FELDWERT>
        </TREFFER>

*/

?>
