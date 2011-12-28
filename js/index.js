GENTICS.Aloha.settings = {
	logLevels: {'error': true, 'warn': true, 'info': true, 'debug': false},
	errorhandling : false,
	ribbon: false,	
	"i18n": {
		// you can either let the system detect the users language (set acceptLanguage on server)
		// In PHP this would would be '<?=$_SERVER['HTTP_ACCEPT_LANGUAGE']?>' resulting in 
		// "acceptLanguage": 'de-de,de;q=0.8,it;q=0.6,en-us;q=0.7,en;q=0.2'
		// or set current on server side to be in sync with your backend system 
		"current": "en" 
	},
	"repositories": {
	 	"com.gentics.aloha.repositories.LinkList": {
	 		data: [
 		        { name: 'Aloha Editor', url:'http://www.aloha-editor.org', type:'website', weight: 0.90  },
 		        { name: 'Aloha Editor\'s cool features', url:'http://www.aloha-editor.org/features.php', type:'website', weight: 0.75  },
 		        { name: 'Aloha Editor\'s hot plugins', url:'http://www.aloha-editor.org/plugins.php', type:'website', weight: 0.75  },
 		        { name: 'Aloha Editor Demos', url:'http://www.aloha-editor.org/demos.php', type:'website', weight: 0.75  },
 		        { name: 'Aloha Magic Cubes', url:'http://www.aloha-editor.org/demos/css3/', type:'website', weight: 0.65  },
 		        { name: 'Aloha Editor Performane', url:'http://www.aloha-editor.org/benchmarks/analysis.php', type:'website', weight: 0.75  },
 		        { name: 'Aloha Developers Wiki', url:'http://www.aloha-editor.org/wiki', type:'website', weight: 0.50 },
 		        { name: 'Aloha Editor API', url:'http://aloha-editor.org/api', type:'website', weight: 0.50  },
 		        { name: 'Aloha Wordpress Demo', url:'http://www.aloha-editor.org/demos/wordpress-demo/index.html', type:'website', weight: 0.75  }
	 		]
		}
	},
	"plugins": {
	 	"com.gentics.aloha.plugins.Format": {
			config : [ 'b', 'i', 'sub', 'sup', 'p', 'title', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'pre', 'removeFormat']
		},
	 	"com.gentics.aloha.plugins.Link": {
		 	// all elements with no specific configuration may insert links
			config : [ 'a' ],
		  	// all links that match the targetregex will get set the target
 			// e.g. ^(?!.*aloha-editor.org).* matches all href except aloha-editor.org
		  	targetregex : '^(?!.*aloha-editor.org).*',
		  	// this target is set when either targetregex matches or not set
			// e.g. _blank opens all links in new window
		  	target : '_blank',
		  	// the same for css class as for target
		  	cssclassregex : '^(?!.*aloha-editor.org).*',
		  	cssclass : 'aloha',
		  	// use all resources of type website for autosuggest
		  	objectTypeFilter: ['website'],
		  	// handle change of href
		  	onHrefChange: function( obj, href, item ) {
			  	if ( item ) {
					jQuery(obj).attr('data-name', item.name);
			  	} else {
					jQuery(obj).removeAttr('data-name');
			  	}
		  	}
		}
  	}
};

	$(document).ready(function() {
		setTimeout(function () {
			// unpin a pinned floating menu
			if (GENTICS.Aloha.FloatingMenu.pinned) {
				GENTICS.Aloha.FloatingMenu.togglePin();
			}

			var m = jQuery('#mousepointer');
			m.css('position', 'relative')
				.css('top', 0)
				.css('z-index', 999999)
				// float to the text above
				.animate({
					top:  -290,
					left: -40
				}, 900)
				// click the text
				.animate({
					width: 37,
					height: 61,
					marginLeft: 2,
					marginBottom: 2
				}, 10)
				.animate({
					width: 40,
					height: 65,
					marginLeft: 0,
					marginBottom: 0
				}, 10, 'swing', function () {
					// now alohify the text
					$('#YesYouCan').aloha();
			
					// activate the newly generated editable
			    		GENTICS.Aloha.editables[0].obj.focus();
					GENTICS.Aloha.editables[0].activate();
	
					// select the text
					var range = new GENTICS.Utils.RangeObject({
					    startContainer : jQuery('#YesYouCan p').contents().get(0),
					    startOffset : 17,
					    endContainer : jQuery('#YesYouCan p').contents().get(0),
					    endOffset : 25
			    	});
			    	range.select();
			    	GENTICS.Aloha.Selection.updateSelection();
	
			    	//jQuery('.GENTICS_button_b').click();
				})
				// fly towards the B-button
				.animate({
					top: -420,
					left: -200
				}, 1000)
				// click bold
				.animate({
					width: 37,
					height: 61,
					marginLeft: 2,
					marginBottom: 2
				}, 10)
				.animate({
					width: 40,
					height: 65,
					marginLeft: 0,
					marginBottom: 0
				}, 10, 'swing', function () {
			    	jQuery('.GENTICS_button_b').click();
				})
				// fly back home
				.animate({
					top: 0,
					left: 0
				}, 1000);
		}, 2000);
	});  
