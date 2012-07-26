Aloha.ready(function() {
	Aloha.require( ['aloha', 'ui/scopes', 'ui/toolbar'], function( Aloha, Scopes, FloatingMenu) {

	setTimeout(function () {
		// unpin a pinned floating menu
		/*if (FloatingMenu.pinned) {
			FloatingMenu.togglePin();
		}*/

		var m = jQuery('#mousepointer');
		m.css('position', 'relative')
			.css('top', 0)
			.css('z-index', 999999)
			// float to the text above
			.animate({
				top:  -250,
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
				Aloha.editables[0].obj.focus();
				Aloha.editables[0].activate();
				
				// select the text
				var range = new GENTICS.Utils.RangeObject({
				    startContainer : jQuery('#YesYouCan p').contents().get(0),
				    startOffset : 17,
				    endContainer : jQuery('#YesYouCan p').contents().get(0),
				    endOffset : 25
		    	});
		    	range.select();
		    	Aloha.Selection.updateSelection();
				
				//FloatingMenu.show();
				Scopes.setScope('Aloha.continuoustext');
				//var target = FloatingMenu.calcFloatTarget(Aloha.Selection.getRangeObject());
				//if (target) {
				//	FloatingMenu.floatTo(target);
				//}
			})
			// fly towards the B-button
			.animate({
				top: -375,
				left: -210
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
		    	jQuery('.aloha-button-b').click();
			})
			// fly back home
			.animate({
				top: 0,
				left: 0
			}, 1000);
	}, 2000);


	});
});