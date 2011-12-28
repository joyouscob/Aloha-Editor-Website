<?php include('inc/header.inc'); ?>

</head>

<body>
	<div id="wrapper" class="container_20">

<? include('inc/menu.inc'); ?>
		
		<div id="teaser" class="container_20">
			<div class="grid_14">
			
				<img src="<?=$path?>images/join_us.png" style="width: 250px; float:right; top:20px; position:relative; cursor:hand;" onclick="window.location.href='<?=$path?>contact.php'" />
				<h1>You can contribute</h1>
				<p>Tell your friends about Aloha Editor. We appreciate that. If you like what we do and want to 
				contribute more check out the area you fit the best and start doing. If you want to let us know
				send us a message. All members of the Aloha Editor Team contribute in their spare time as much a 
				they want or as part of their job, when Aloha Editor is something their company supports.
				
				<h2 id="jsl">Javascript guru</h2>
				<a href='http://jqfundamentals.com/book/book.html' title='jQuery, jQuery Fundamantals, JS Fundamentals, JS jQuery, Learn jQuery, jQuery done right, Best jQuery Tutorial, best jQuery training' style="float:left;padding:35px 25px 5px 0; border:none"><img src='http://static.jsconf.us/promotejsh.gif' height='150' width='180' alt='jQuery, jQuery Fundamantals, JS Fundamentals, JS jQuery, Learn jQuery, jQuery done right, Best jQuery Tutorial, best jQuery training'/></a>
				<p>You are a Javascript guru and know firebugs like your pockets?
				You have enough fantasy to imagine things nobody did before?
				Are you ballsy enaugh to try those things out?
				Join this exciting project. You can contribute plugins, to the core or whatever you like.
				You will find other JS adicts.<br />
				<a href="<?=$path?>contact.php">I want to contribute.</a>
				</p>
				
				<h2 id="cook">Cook</h2>
				<p>All those engaged Javascript gurus, webdesigners, translators, bloggers and community angels from time to time
				need some food. Be the Aloha Editor cook! Do, what you think a cook should do for this
				people. Show us your talent.<br />
				<a href="<?=$path?>contact.php">I want to show my talent.</a>
				</p>
				
				<h2 id="webdesigner">Webdesigner</h2>
				<img src="http://farm3.static.flickr.com/2302/2095236303_e24a32c3a5_m.jpg" style="float:right; "/>
				<p>We love Webdesign made with Aloha - with affection, love, peace, compassion and 
				mercy for the web. You design creative amazement? Help to let the Aloha Editor website and 
				examples shine!<br />
				<a href="<?=$path?>contact.php">I want to spread affection, love, peace, compassion and 
				mercy.</a>
				</p>
				
				<h2 id="translator">Translator</h2>
				<p>You can help if you speak a language Aloha Editor is not translated to yet. 
				Join this international and multi cultural project team! No programming knowledge necessary to translate. 
				A machine translation functionality helps to get fast results.<br />
				<i>Please add a message with the lanugage you will translate to when registering. We will add not listed languages. (<a href="http://mygengo.com/string/p/aloha-editor-1/">check translation state</a>)</i><br /> 
				<a href="http://mygengo.com/string/p/aloha-editor-1/access/request">I will translate.</a> 
				</p>

				<h2 id="blogger">Blogger</h2>
				<p>We are developers. We write software, we don't like writing articles. So the world will never no what we do ;-( 
				If you are a blogger or you love writing stuff, we feed you with the right information! Join the team and 
				you are the first, who can spread the good Aloha Editor news!</br />
				<a href="<?=$path?>contact.php">I want to to be the first to know about new stuff.</a>
				</p>
					
				<h2 id="angel">Community angel</h2>
				<p>Thousends of people loaded the Aloha Editor down and tried it out. All those developers and users had a lot of 
				questions about Aloha Editor. You can be their angel and answer their questions in the forum and on github or 
				wherever a question about Aloha Editor comes up. You can have direct prioritized contact to the core developers 
				and they will help you beeing an angel for others.<br />
				<a href="<?=$path?>contact.php">I want to help others.</a>
				</p>

				<h2 id="tester">Tester</h2>
				<p>You don't speak Javascript and don't know anything about the inside of Aloha Editor and still want to help? No problem, your browser
				does and by clicking the link below, you run the automatic tests in your browser. This will help us to identify problems in various
				browser versions, because we can only fix problems we know about!<br/>
				<a href="http://testswarm.aloha-editor.org/run/alohaeditor/">I want to test Aloha Editor</a></p>

			</div>
			<div class="grid_6">

			<?php include('inc/team.inc'); ?>

			</div>
			<div class="clear"></div>
		</div>

<? include('inc/footer.inc'); ?>

	</div>

</body>
</html>
