<? include('../inc/header.inc'); ?>

</head>
<body>

	<div id="wrapper" class="container_20">

<? include('../inc/menu.inc'); ?>
		
		<div id="devcon" class="container_20">
		<div class="grid_20">

<h2>Aloha Cube</h2>

<p>We will publish the Aloha Cube here <del>on Friday 4th March at 3pm CET</del>! <ins>Was too optimistic...</ins> <a href="http://www.aloha-editor.org/demos/cube/">Be the first to test this amazing HTML5 demo!</a> Follow us on <a target="_blank" href="http://twitter.com/alohaeditor">twitter</a> and be informed. <a href="http://aloha-editor.org/demos/cube/">Check it out live!</a></p>

<p style="padding-top:10px">
<a target="_blank" href="http://twitter.com/share" class="twitter-share-button" data-text="Editable HTML5 3D cube rotating! @alohaeditor" data-count="horizontal" data-via="draftkraft">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FAloha-Editor%2F186840001331784&amp;&amp;layout=button_count&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
</p>

<p>&nbsp;</p>
<iframe title="YouTube video player" width="853" height="510" src="http://www.youtube.com/embed/FRhC6mDG1qU" frameborder="0" allowfullscreen></iframe>
<p>&nbsp;</p>
<p>The 3D cube is made of divs which all are editable. You may change formattings, insert tables or images while the cube is moving. The example implements <del>all 9</del><ins>8</ins> ;-) technology classes of HTML5, suchas semantic data, offline storage, geolocation, <del>websockets,</del> video, 3D, performance, css3 and CONTENTEDITABLE trough Aloha Editor<ins>We could not manage to implement the websockets. The idea is that you control somebody elses cube ;-)</ins>.</p>
<p>&nbsp;</p>
<p>
<a href="http://www.w3.org/html/logo/"  style="border: none;">
<img src="http://www.w3.org/html/logo/badge/html5-badge-h-connectivity-css3-device-graphics-multimedia-performance-semantics-storage.png" width="357" height="64" alt="HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, Device Access, Graphics, 3D &amp; Effects, Multimedia, Performance &amp; Integration, Semantics, and Offline &amp; Storage" title="HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, Device Access, Graphics, 3D &amp; Effects, Multimedia, Performance &amp; Integration, Semantics, and Offline &amp; Storage" style="border: none;">
</a>
</p>
<p>&nbsp;</p>
	 		<div class="clear"></div>
		</div>

<? include('../inc/footer.inc'); ?>

	</div>

<script type="text/javascript">
function twitterCallback(res) {
	setTimeout(function() {
  var twitters = res.results;
  if (twitters.length > 0) {
    var username = twitters[0].from_user;
    var avatar = twitters[0].profile_image_url;
    var status = twitters[0].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
      return '<a href="'+url+'">'+url+'</a>';
    }).replace(/\B@([_a-z0-9]+)/ig, function(reply) {
      return  reply.charAt(0)+'<a href="http://twitter.com/'+reply.substring(1)+'">'+reply.substring(1)+'</a>';
    });
    statusHTML = '<div class="quote"><div class="before">"</div><cite>'+status+'</cite><div class="after">"</div></div><div class="quote-arrow">&nbsp;</div><div class="quote-from"><img src="'+avatar+'" style="float:right; position:relative; left:-0px; top:-10px" /><a href="http://twitter.com/'+username+'">'+username+'</a></div>';
  }
  var q = $('#AEquote');
  q.html(statusHTML);
	}, 7000);
};
</script>
<script text="text/javascript"src="http://search.twitter.com/search.json?callback=twitterCallback&rpp=1&q=aloha%20editor"></script>

</body>
</html>
