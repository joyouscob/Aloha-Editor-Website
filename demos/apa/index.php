<?php
	$alohaeditor_cdn = 'http://aloha-editor.org/demos/apa/aloha-editor/';

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>APA | Schwere Angriffe am letzten Tag der Waffenruhe</title>

<link href="<?=$alohaeditor_cdn?>css/aloha.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/vendor/jquery-1.7.2.js"></script>
<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/require.js"></script>

<script type="text/javascript" src="settings.js"></script>

<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/aloha.js"
			data-aloha-plugins="common/ui,
								common/format,
		                        common/table,
		                        common/list,
		                        common/link,
		                        common/image,
		                        common/block,
		                        common/align,
		                        common/undo,
		                        common/contenthandler,
		                        common/paste,
		                        common/commands,
		                        common/abbr,
		                        common/abbr,
								extra/apa"></script>

<!-- turn an element into editable Aloha continuous text -->
<script type="text/javascript">
Aloha.ready(function() {
	$('#title').aloha();
	$('#multicolumnElement').aloha();
});

Aloha.bind('aloha-editable-deactivated', function(event, editable){
	console.log(editable.editable.getContents());

});


/* should not be necessary -- if no options are in the toolbar AE should not show it */
Aloha.bind('aloha-editable-activated', function(event, editable){
	if ('title' === editable.editable.getId()) {
		window.setTimeout(hideToolbar, 50);
	}
});
function hideToolbar() {
	$('.aloha-toolbar').hide();
}
/* AE workaround end */
</script>



<link href='http://fonts.googleapis.com/css?family=Orienta' rel='stylesheet' type='text/css'>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />

	</head>
	
	<body>
	
	<div id="header">
		<img id="header-text-logo" src="text.gif" width="260px" height="70px">
		<img id="header-apa-logo" src="apa-logo.gif" width="69px" height="70px">
	</div>
	
	
	<div id="content">
	
	<h1 id="title">Schwere Angriffe am letzten Tag der Waffenruhe</h1>
	
	<div id="multicolumnElement">

		<p class="p-intro"><span class="intro">Damaskus/Amman (APA/ag.) -</span> Nach dem Scheitern der Waffenruhe in Syrien bemüht sich der internationale Vermittler Lakhdar Brahimi in Russland und China um ein Ende der Gewalt. Beide Staaten haben westliche Syrien-Resolutionen im Sicherheitsrat bisher blockiert. Aus Syrien selbst wurden am vierten und letzten Tag der ausgerufenen Feuerpause zum islamischen Opferfest neue Kämpfe und die bisher heftigsten Luftangriffe gemeldet.</p>

		<p><img width="350px" title="Syrian President Bashar al-Assad meets Brazilian President Luis Inacio Lula da Silva in Brasilia." src="assad.png"></p>

		<p>In der Hauptstadt Damaskus wurden bei einem Bombenanschlag mindestens zehn Menschen getötet. Laut syrischem Staatsfernsehen, detonierte der in einem Auto platzierte Sprengsatz am Montag in einer Bäckerei in dem überwiegend von Drusen und Christen bewohnten Vorort Jaramana.</p>

		<p>Zudem flog die syrische Luftwaffe nach Angaben von Menschenrechtlern die bisher heftigsten Angriffe im Land. Binnen drei Stunden hätten Kampfjets am Montagmorgen 34 Angriffe gestartet, teilte die Syrische Beobachtungsstelle für Menschenrechte mit Sitz in London mit.</p>
		
		<p>Die syrische Armeeführung hat unterdessen die Rebellen für die Verletzung der Waffenruhe verantwortlich gemacht. Sie warf den Aufständischen vor, für die Zerstörung des Landes verantwortlich zu sein.</p>

		
		<p>Brahimi stufte die Lage in Syrien als "sehr, sehr gefährlich" ein. Die Situation werde immer schlimmer, so der Sondergesandte von UNO und Arabischer Liga. Einen Einsatz von Blauhelmen in dem Krisenland erwägten die Vereinten Nationen aber derzeit nicht. Der russische Außenminister Lawrow bekräftigte, Russland unterstütze eine Rückkehr von Militärbeobachtern nach Syrien, sobald das Blutvergießen dort beendet sei.</p>

		<p>Obwohl die von ihm ausgehandelte Waffenruhe gebrochen wurde, sei er weiter entschlossen, nach einem Ausweg aus der Krise zu suchen, kündigte Brahimi an. Er forderte weitere Verhandlungen. "Wir werden alle nur möglichen Bemühungen unternehmen und werden bereit sein, mit allen inneren und äußeren Akteuren zu kooperieren, um der Gewalt ein Ende zu setzen", sagte der algerische Diplomat.</p>

		
	</div>
	
	</div>

	</body>
	
</html>
</body>
</html>
