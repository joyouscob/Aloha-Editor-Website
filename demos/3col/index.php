<?php require_once '../../inc/version.inc' ?>
<!DOCTYPE html>
<!-- 
Author: Joshua Kelly (http://www.kmsm.ca/)
-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Aloha, World!</title>

<link href="<?=$alohaeditor_cdn?>css/aloha.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/vendor/jquery-1.7.2.js"></script>
<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/require.js"></script>

<script>
	var Aloha = window.Aloha || ( window.Aloha = {} );
	
	Aloha.settings = {
		locale: 'en',
		plugins: {
			format: {
				config: [  'b', 'i', 'p', 'sub', 'sup', 'del', 'title', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'pre', 'removeFormat' ],
			  	editables : {
					// no formatting allowed for title
					'#title'	: [ ]
			  	}
			},
			link: {
				editables : {
					// No links in the title.
					'#title'	: [  ]
			  	}
			},
			list: {
				editables : {
					// No lists in the title.
					'#title'	: [  ]
			  	}
			},
			abbr: {
				editables : {
					// No abbr in the title.
					'#title'	: [  ]
			  	}
			},
			image: {
				'fixedAspectRatio': true,
				'maxWidth': 1024,
				'minWidth': 10,
				'maxHeight': 786,
				'minHeight': 10,
				'globalselector': '.global',
				'ui': {
					'oneTab': false
				},
				editables : {
					// No images in the title.
					'#title'	: [  ]
			  	}
			}
		},
		sidebar: {
			disabled: true
		},
		contentHandler: {
		    allows: {
				elements: [
					'a', 'abbr', 'b', 'blockquote', 'br', 'caption', 'cite', 'code', 'col',
					'colgroup', 'dd', 'del', 'dl', 'dt', 'em', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
					'i', 'img', 'li', 'ol', 'p', 'pre', 'q', 'small', 'strike', 'strong',
					'sub', 'sup', 'table', 'tbody', 'td', 'tfoot', 'th', 'thead', 'tr', 'u',
					'ul', 'span', 'hr', 'object', 'div'
				],

				attributes: {
					'a': ['href', 'title', 'id', 'class', 'target', 'data-gentics-aloha-repository', 'data-gentics-aloha-object-id'],
					'div': [ 'id', 'class'],
					'abbr': ['title'],
					'blockquote': ['cite'],
					'br': ['class'],
					'col': ['span', 'width'],
					'colgroup': ['span', 'width'],
					'img': ['align', 'alt', 'height', 'src', 'title', 'width', 'class'],
					'ol': ['start', 'type'],
					'q': ['cite'],
					'p': ['class'],
					'table': ['summary', 'width'],
					'td': ['abbr', 'axis', 'colspan', 'rowspan', 'width'],
					'th': ['abbr', 'axis', 'colspan', 'rowspan', 'scope', 'width'],
					'ul': ['type'],
					'span': ['class','style','lang','xml:lang']
				},

				protocols: {
					'a': {'href': ['ftp', 'http', 'https', 'mailto', '__relative__']},
					'blockquote': {'cite': ['http', 'https', '__relative__']},
					'img': {'src' : ['http', 'https', '__relative__']},
					'q': {'cite': ['http', 'https', '__relative__']}
				}
			}
		}
	};
</script>

<script type="text/javascript" src="<?=$alohaeditor_cdn?>lib/aloha.js"
			data-aloha-plugins="common/ui,
								common/format,
		                        common/table,
		                        common/list,
		                        common/link,
		                        common/highlighteditables,
		                        common/block,
		                        common/undo,
		                        common/image,
		                        common/contenthandler,
		                        common/paste,
		                        common/commands,
		                        common/abbr"></script>

<!-- turn an element into editable Aloha continuous text -->
<script type="text/javascript">
Aloha.ready(function() {
	$('#title').aloha();
	$('#multicolumnElement').aloha();
});

</script>

	<link href="http://fonts.googleapis.com/css?family=Lobster" media="screen" rel="stylesheet" type="text/css" />
		
		<style type="text/css">
			
			#multicolumnElement {
				-webkit-column-width:300px;
				-webkit-column-gap:30px;
				-moz-column-width:300px;
				-moz-column-gap:30px;
				column-width:300px;
				column-gap:30px;
				width:960px;
				height: 1100px;
				margin: 0 auto;
			}

			h1 {
				font-family: 'Lobster', Georgia, sans-serif;
				line-height: 140%;
				text-rendering: optimizeLegibility;
				margin:20px auto;
				font-size:12em;
				color: #2a719e;
				text-align:center;
			}
			
			p.p-intro {
				font-size: 1.5em;
				line-height: 1.3em;
				text-align:left !important;
			}
			
			p {
				font-family: Georgia;
				font-size: 1em;
				line-height: 1.4em;
				text-align: justify;
			}

			p.p-intro:first-letter  {
				color: #5499c5;
				display: inline;
				float: left;
				font-size: 3em;
				margin: 0px;
				padding: 0.2em 0.1em 0 0.1em;
				text-transform: capitalize;
				font-family: 'Lobster';
			}
			
			img {
				display: block; 
				width: 300px;  
				overflow: visible;
				}
			
		</style>
	
	</head>
	
	<body>
	
	<h1 id="title">Moby Dick</h1>
	
	<div id="multicolumnElement">
		
		<p class="p-intro">Call me Ishmael. Some years ago - never mind how long precisely - having little or no money in my purse, and nothing particular to interest me on shore, I thought I would sail about a little and see the watery part of the world.</p>
		
		<p>It is a way I have of driving off the spleen, and regulating the circulation. Whenever I find myself growing grim about the mouth; whenever it is a damp, drizzly November in my soul; whenever I find myself involuntarily pausing before coffin warehouses, and bringing up the rear of every funeral I meet; and especially whenever my hypos get such an upper hand of me, that it requires a strong moral principle to prevent me from deliberately stepping into the street, and methodically knocking people's hats off - then, I account it high time to get to sea as soon as I can. This is my substitute for pistol and ball. With a philosophical flourish Cato throws himself upon his sword; I quietly take to the ship. There is nothing surprising in this. If they but knew it, almost all men in their degree, some time or other, cherish very nearly the same feelings towards the ocean with me.</p>
	
		<p>There now is your insular city of the Manhattoes, belted round by wharves as Indian isles by coral reefs - commerce surrounds it with her surf. Right and left, the streets take you waterward. Its extreme down-town is the battery, where that noble mole is washed by waves, and cooled by breezes, which a few hours previous were out of sight of land. Look at the crowds of water-gazers there.</p>
		
		<p>Circumambulate the city of a dreamy Sabbath afternoon. Go from Corlears Hook to Coenties Slip, and from thence, by Whitehall northward. What do you see? - Posted like silent sentinels all around the town, stand thousands upon thousands of mortal men fixed in ocean reveries. Some leaning against the spiles; some seated upon the pier-heads; some looking over the bulwarks of ships from China; some high aloft in the rigging, as if striving to get a still better seaward peep. But these are all landsmen; of week days pent up in lath and plaster - tied to counters, nailed to benches, clinched to desks. How then is this? Are the green fields gone? What do they here?</p>

		<p><img src="moby-dick.jpg"></p>
		
		<p>But look! here come more crowds, pacing straight for the water, and seemingly bound for a dive. Strange! Nothing will content them but the extremest limit of the land; loitering under the shady lee of yonder warehouses will not suffice. No. They must get just as nigh the water as they possibly can without falling in. And there they stand - miles of them - leagues. Inlanders all, they come from lanes and alleys, streets and avenues, - north, east, south, and west. Yet here they all unite. Tell me, does the magnetic virtue of the needles of the compasses of all those ships attract them thither?</p>

		<p>Once more. Say, you are in the country; in some high land of lakes. Take almost any path you please, and ten to one it carries you down in a dale, and leaves you there by a pool in the stream. There is magic in it. Let the most absent- minded of men be plunged in his deepest reveries - stand that man on his legs, set his feet a-going, and he will infallibly lead you to water, if water there be in all that region. Should you ever be athirst in the great American desert, try this experiment, if your caravan happen to be supplied with a metaphysical professor. Yes, as every one knows, meditation and water are wedded for ever.</p>

		<p>But here is an artist. He desires to paint you the dreamiest, shadiest, quietest, most enchanting bit of romantic landscape in all the valley of the Saco. What is the chief element he employs? There stand his trees, each with a hollow trunk, as if a hermit and a crucifix were within; and here sleeps his meadow, and there sleep his cattle; and up from yonder cottage goes a sleepy smoke. Deep into distant woodlands winds a mazy way, reaching to overlapping spurs of mountains bathed in their hill-side blue. But though the picture lies thus tranced, and though this pine-tree shakes down its sighs like leaves upon this shepherd's head, yet all were vain, unless the shepherd's eye were fixed upon the magic stream before him.</p>
		
	</div>
		
	</body>
	
</html>
</body>
</html>
