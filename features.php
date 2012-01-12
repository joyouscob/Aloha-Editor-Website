<? include('inc/header.inc'); ?>

	<!-- turn an element into editable Aloha continuous text -->
	<script type="text/javascript">
	Aloha.ready(function() {
		Aloha.require( ['aloha', 'aloha/jquery'], function( Aloha, $) {
			$('#JustEdit').aloha();
		});
	});
	</script>
</head>

<body>

	<div id="wrapper" class="container_20">

<? include('inc/menu.inc'); ?>
		
		<div id="teaser" class="container_20">
			<div class="grid_20">
				<h1 id="alohaeditor">Aloha Editor Links.</h1>
				Aloha Editor is designed to be the easiest to use, the fastest in editing and the best in its functions. We made no trade-off in our concept when it comes to user experience. Aloha Editor is different. Feel the difference.
				<br /><a href="demos.php">Try it out.</a>					
				<img src="images/features-top.png" alt="Aloha Features" title="Aloha Features"/>
			</div>
			<div class="grid_1">&nbsp;</div>
			<div class="grid_6">&nbsp;</div>
			<div class="clear"></div>
		</div>
				
		<div class="container_20" style="padding-top:30px">
			<div class="grid_11">
				<a id="easier"><h2>Easier.</h2></a>
			</div>
			<div class="clear"></div>
		</div>

			<div class="container_20" style="padding-top:30px">
				<div class="grid_9">
					<img src="images/link.png" alt="Aloha Links" title="Aloha Links" class="right" />
				</div>
				<div class="grid_11">
					<h3 class="new">Link the world.</h3>
					<p>The Aloha Editor Link Plugin is the world's easiest way to set a link.
					Just click on the link icon or press CTRL+L. The whole word your cursor is in will be selected and marked as link.
					Type the URL or a keyword. If you want to choose from the list of links you 
					get while typing use the arrow keys and press ENTER. When you are 
					finished just press ENTER. Links automatically show you an icon and open in a new window if they 
					are external or they are red if the link target is not available.</p>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="container_20" style="padding-top:30px">
				<div class="grid_20">
					<h3 class="new">Repositories - connect everything</h3>
					<img src="images/repository_browser.png" alt="Aloha Links" title="Aloha Links" class="right" style="width:400px;padding-left:20px;padding-bottom:20px" />	
					<p>The <a href="http://aloha-editor.com/docs/?class=Repository">Aloha Editor Repository API</a> 
					makes it easy to connect any backend system. The 
					Repository API is close to the CMIS standard and offers a lot of functionalities - 
					<a href="http://www.aloha-editor.com/wiki/index.php/Repository">but waaaaays easier</a>. Among those
					the possibilty to search for objects with <b>type ahead</b> or more structured with a <b>repository browser</b>,
					which gives you a tree view like explorer or finder. Furthermore the repository lets you select objects
					by an object type, so you can integrate <b>links</b>, <b>images</b> but even <b>products</b> or <b>any other type</b> you define.
					Objects from a repository can have multiple renditions (eg. like images from flickr) or references to 
					other objects (like the same content in different languages). The Aloha Editor repository manager 
					handles <b>multiple repositories</b> so you can easily plug different repositories together.
					The API also allows you to handle ids and other information for <b>backend processing</b>, like CMS systems need. 
				</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:30px">
				<div class="grid_6">
					<img src="images/just-edit.png" alt="wysiwyg" title="wysiwyg" class="right" />
				</div>
				<div class="grid_14" id="JustEdit">
					<h3>No reload. No popup. No need to preview...</h3>
					<p>Click and edit. This is all you need. If you start editing you do not need to reload the website with 
					an old style rich text editor (RTE). - Just click and edit. With Aloha Editor you work on 
					the final document. You see what you get - with every keystroke!
					Only Aloha Editor is "What you see is what you get" (WYSIWYG).</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:50px">
				<div class="grid_12">
					<h3>Editing and formatting text without Markup</h3>
					<p>Editing any content with Aloha Editor is similar to editing with state of the art word processors on your desktop.
					No need to learn any HTML, Wiki or other markup language.
					The option dialogs have been designed for users not for techies.
					Writing content has never been that easy.</p>
				</div>
				<div class="grid_8">
					<img src="images/editing.png" alt="editing and formatting" title="editing and formatting" class="left"/>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:50px">
				<div class="grid_5">
					<img src="images/floatingmenu.png" alt="floating menu" title="floating menu" style="padding-top:50px"/>
				</div>
				<div class="grid_15">
				<h3>The floating menu. A brand new lightweight context menu.</h3>
				<p>The  floating menu offers you the right options matching your editing context. The menu floats to the 
				paragraph, table or content element you are editing. Thus the menu is as near as it can be.
				Aloha Editor is designed not to show more than 15 icons at the same time.
				This offers you a clear overview about the options at hand. 
				You only see those icons which are useful to you determined by your selection or cursor position.
				Still you may have other options available  just one mouse click away!</p>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="container_20" style="padding-top:50px">
				<div class="grid_10">
					<h3>Tables for the web.</h3>
					<p>Insert the table with the size you want with just one click.
					It has never been easier to insert or edit tables on the web.
					You can use the "TAB" key to jump from one cell to the next.
					Hitting "TAB" in the last cell will add another row to your table.</p>
				</div>
				<div class="grid_10">
					<img src="images/tables.png" alt="tables" title="tables" class="right"/>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:30px">
				<div class="grid_11">
					<a name="faster"><h2>Faster.</h2></a>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:50px">
				<div class="grid_14">
					<h3>Save 25% of working time!</h3>
					<p><img src="images/save-alert.png" alt="save 25%" title="save 25%" class="left" style="width:100px"/>Aloha Editor
					is designed to make your editing process faster.
					Each single editing step has been improved.
					First we reduced the number of steps it takes to get your daily work done.
					Then we improved the duration of each single step. 
					This results in 25% less time you spend on typing and formatting your content. <br /><a href="benchmarks/analysis.php#usability">Checkout the usability performance tests!</a></p>
				</div>
				<div class="grid_6">
					<img src="images/stats-faster.png" class="stats" alt="80% speedup" title="80% speedup" />
					<!-- div class="chart">
					        <div style="width:200px;" class="bar blue"><span>25% faster</span><p>Aloha</p></div>  
					        <div style="width:250px;" class="bar gray"><span></span><p>TinyMCE</p></div>
					        <div style="width:266px;" class="bar gray"><span></span><p>CkEditor</p></div>  
					</div-->
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:50px">
				<div class="grid_8">
					<img src="images/stats-speedup.png" class="stats" alt="80% speedup" title="80% speedup"/>
					<!-- <div class="chart">
		        			<div style="width:50px;" class="bar blue"><span></span><p>Aloha</p></div>
					        <div style="width:111px;" class="bar gray"><span></span><p>TinyMCE</p></div>
					        <div style="width:267px;" class="bar gray"><span></span><p>CkEditor</p></div>
					</div>-->
				</div>
				<div class="grid_12">
					<h3>80% loading speedup for multiple instances!</h3>
					<p><img src="images/speedup-alert.png" alt="80% loading time saved" title="80% loading time saved" class="right" style="width:100px"/>Aloha Editor 
					is ready to use when your website is loaded.
					Even if you need 20 or 100 input areas, Aloha Editor is loaded only once.
					Most of the other Editors use iframes and need to reload the Javascript and CSS for each instance.
					Aloha Editor does not need iframes.
					This results in saving up to 80% of the loading time compared to other editors.<br /><a href="benchmarks/analysis.php#performance">Check out the loading performance test.</a></p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:30px">
				<div class="grid_11">
					<a name="better"><h2>Better.</h2></a>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:50px">
				<div class="grid_10">
					<img src="images/accordion.png" alt="accordion" title="accordion" style="padding-top:0px"/>
				</div>
				<div class="grid_10">
					<h3>WYSIWYG for dynamic content.</h3>
					<p>Aloha Editor allows you to edit content you would never have thought you can.
					You can edit content directly in content accordions, sliders, tickers, captions or descriptions of images in slideshows.
					It is the world's first full featured editor that allows you to edit dynamic content live and in place.</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:50px">
				<div class="grid_14">
					<h3>Contenteditable. HTML5 available - now.</h3>
					<p>Aloha Editor makes HTML5 contenteditable possible - now.
					All major browsers support contenteditable.
					But they provide no interface or even break the HTML source code.
					Contenteditable is the heart of Aloha Editor and makes it to world's most advanced Editor.
					With Aloha Editor you are one step closer to the exciting new world that comes with HTML5.
					The future of content editing. Available now with Aloha Editor.</p>
				</div>
				<div class="grid_6">
					<img src="images/contenteditable.png" alt="html5" title="html5" style="padding-top:0px; width: 240px;"/>
				</div>
				<div class="clear"></div>
			</div>

			<div class="container_20" style="padding-top:50px">
				<div class="grid_6">
					<img src="images/html5.jpg" alt="html5" title="html5" style="padding-top:0px"/>
				</div>
				<div class="grid_14">
					<h3>Get what you expect.</h3>
					<p>Developers get what they expect.
					Aloha produces clean xHTML5 code once integrated into your application.
					In contrast, some browsers or editors generate broken HTML Code.
					It requires you to clean up the code before you store it in your application.
					Thus there is no need for a source code view in Aloha Editor. It just generates clean xHTML5 code.
					</p>				</div>
				<div class="clear"></div>
			</div>

<? include('inc/footer.inc'); ?>

	</div>
</body>
</html>
