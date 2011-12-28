<? include('../inc/header.inc'); ?>

</head>
<body>

	<div id="wrapper" class="container_20">

	<div id="header" class="container_20">
<? include('../inc/menu.inc'); ?>
	</div>
		
        <div id="teaser" class="container_20">
        	<div class="grid_20">
            	<h1>Aloha Editor Analysis / Benchmark</h1>
            	<p>The following performance analysis and benchmarks compare Aloha Editor with similar editors. We divided our benchmarks into two sets of tests. The first one mainly focuses upon the user interaction with the editor interface. The second one is more like a technical benchmark that measures the performance of various editor frameworks in comparison to the Aloha Editor.</p>
		<p>&nbsp;</p>
       		</div>
		<div class="clear"></div>
	</div>

        <div id="usability_analysis" class="container_20">
        	<div class="grid_14">
            	<a name="usability"><h2>Usability</h2></a>
                <p>By counting the duration of interactions that are necessary to achieve a specific task we can get a sense for the efficiency of the editor interface. To measure the interactions correctly we utilized the <a target="_blank" href="http://en.wikipedia.org/wiki/Keystroke-Level_Model">KeyStroke-Level-Model (KLM)</a> which is designed specifically for this purpose. </p>
            	</div>
            	<div class="grid_6">
		<img alt="" src="https://spreadsheets0.google.com/a/apps.gentics.com/oimg?key=0AsjNOJVxu5d2dGRDMjBzUEJkaE9JYTNHS3JmdWp0MEE&oid=4&zx=kqndr4-pt25k5" />
            	</div>
		<div class="clear"></div>
	</div>

	<div class="container_20">
		<div class="grid_20">
		The specific tasks we used to create our measurements cover the following list of actions:<br /><br />
		<div style="padding-left: 50px !important;">
		<ol>
				   <li>Load the testpage</li>
				   <li>Edit first paragraph</li>
				   <li>Make some words bold</li>
				   <li>Save and edit another paragraph</li>
				   <li>Insert a table and write some text into the table</li>
				   <li>Save the page</li>
		</ol>
		</div>

		<p>&nbsp;</p>
		<p>The Aloha Editor outperforms both compared editors (TinyMCE, Another Editor) by more than 25%.</p>
		<br />
		<table class="light">
				<thead>
					<th>Editor</th>
					<th>Interactiontime [sec]</th>
					<th>Compared with Aloha Editor</th>
				</thead>
				<tbody>
					<tr><td>Aloha</td><td>32,1</td><td>1.00</td></tr>									
					<tr><td>TinyMCE</td><td>40,0</td><td>1.25</td></tr>									
					<tr><td>Another Editor</td><td>42,7</td><td>1.33</td></tr>
				</tbody>									
				</table>
				<p style="padding-top: 50px;">Due to the design of the Aloha Editor its possible to edit the webpage that you are currently viewing directly. Its no longer needed to switch between preview and edit mode. This is one of the key benefits using Aloha Editor for web editing applications. Creating and editing tables is also more efficent. As you can see from our screencasts other editors use popups to customize the table features. Our approach uses a drag and drop approach to define the dimension of the table. This saves numerous interactions and thus time.</p>
				<p style="padding-top: 50px;">The full KLM data we gathered and a detailed list of interactions can be downloaded as <a target="_blank" href="https://spreadsheets.google.com/pub?key=0AsjNOJVxu5d2dGRDMjBzUEJkaE9JYTNHS3JmdWp0MEE&hl=en&single=true&gid=0&output=pdf">PDF</a> or viewed <a href="https://spreadsheets.google.com/pub?key=0AsjNOJVxu5d2dGRDMjBzUEJkaE9JYTNHS3JmdWp0MEE&hl=en&single=true&gid=0&output=html">here</a>. 
				You can also take a look at our testpages and screencasts which are accessible here:</p>
				<br /><br />
                		<div style="padding-left: 50px !important;">
					<ul>
						<li>Aloha <a href="aloha/aloha-test.html">Testpage</a>, <a href="http://www.screencast.com/t/YjBlMDlmY2Q">Screencast</a><br/></li>
						<li>TinyMCE <a href="tinymce/tinymce-test.php">Testpage</a>, <a href="http://www.screencast.com/t/MDBjMzIwO">Screencast</a></li>
						<li>Another Editor <a href="another_editor/another_editor-test.php">Testpage</a>, <a href="http://www.screencast.com/t/ZmQyOThiYjct">Screencast</a></li>
					</ul>
				</div>
				<p style="padding-top: 70;">&nbsp;</p>
			</div>
		</div>

		<div class="container_20">
			<div class="grid_13">
				<a name="performance"><h2>Performance</h2></a>
				<p>One major feature of the Aloha Editor is the usage of multiple editables. The Aloha Editor creates only on instance for multiple editables. Other editors create multiple editor instances. Thus may cause latency when loading the page due to editor initialization. By measuring this latency we can compare the editors. We measured multiple variations of editables (1,5,10,20,40) in Google Chrome 5 and Mozilla Firefox 3.6</p>
			</div>
			<div class="grid_7">
				<img alt="" src="https://spreadsheets0.google.com/a/apps.gentics.com/oimg?key=0AsjNOJVxu5d2dGRDMjBzUEJkaE9JYTNHS3JmdWp0MEE&oid=5&zx=rps4um-3pikju" />
			</div>
			<div class="clear"></div>
		</div>

		<div id="performance_analysis" class="container_20">
			<div class="grid_10">
				<img alt="" src="https://spreadsheets0.google.com/a/apps.gentics.com/oimg?key=0AsjNOJVxu5d2dGRDMjBzUEJkaE9JYTNHS3JmdWp0MEE&oid=2&zx=oymi0k-lw1i3x" />
			</div>
			<div class="grid_10">
				<img alt="" src="https://spreadsheets0.google.com/a/apps.gentics.com/oimg?key=0AsjNOJVxu5d2dGRDMjBzUEJkaE9JYTNHS3JmdWp0MEE&oid=1&zx=4h70my-2ltu9" />
			</div>
		</div>
			<div class="clear"></div>
		</div>

		<div class="container_20">
			<div class="grid_20">
				<div>
					<p align="center">Initialization times are nearly linear for the Aloha Editor.</p>
					<p style="padding-top: 50;">&nbsp;</p>
					<p>The Aloha Editor loads 5.3x faster than Another Editor and 2.2x faster than TinyMCE when comparing the editors in a page with 10 editable areas using Google Chrome 5. The full analysis data can be downloaded as <a target="_blank" href="https://spreadsheets.google.com/pub?key=0AsjNOJVxu5d2dGRDMjBzUEJkaE9JYTNHS3JmdWp0MEE&hl=en&single=true&gid=1&output=pdf">PDF</a> or viewed <a href="https://spreadsheets.google.com/pub?key=0AsjNOJVxu5d2dGRDMjBzUEJkaE9JYTNHS3JmdWp0MEE&hl=en&single=true&gid=1&output=html">here</a>.</p>
			<br />
			<p style="padding-top: 70;">
			This are the testsites we used for the test:<br/><br />
			<table class="light">
				<thead>
					<th colspan="6">Editor/Editables</th>
				</thead>
				<tbody>
		
				<tr>
					<td>Aloha</td>
					<td><a href="aloha/aloha-performance.php?e=1">1</a></td>
					<td><a href="aloha/aloha-performance.php?e=5">5</a></td>
					<td><a href="aloha/aloha-performance.php?e=10">10</a></td>
					<td><a href="aloha/aloha-performance.php?e=20">20</a></td>
					<td><a href="aloha/aloha-performance.php?e=40">40</a></td>
				</tr>
				
				<tr>
					<td>TinyMCE</td>
					<td><a href="tinymce/tinymce-performance.php?e=1">1</a></td>
					<td><a href="tinymce/tinymce-performance.php?e=5">5</a></td>
					<td><a href="tinymce/tinymce-performance.php?e=10">10</a></td>
					<td><a href="tinymce/tinymce-performance.php?e=20">20</a></td>
					<td><a href="tinymce/tinymce-performance.php?e=40">40</a></td>
				</tr>
				
				<tr>
					<td>Another Editor</td>
					<td><a href="another_editor/another_editor-performance.php?e=1">1</a></td>
					<td><a href="another_editor/another_editor-performance.php?e=5">5</a></td>
					<td><a href="another_editor/another_editor-performance.php?e=10">10</a></td>
					<td><a href="another_editor/another_editor-performance.php?e=20">20</a></td>
					<td><a href="another_editor/another_editor-performance.php?e=40">40</a></td>
				</tr>
				
				</tbody>
			</table>
			</p>
			</div>
		</div>
		<div class="clear"></div>
		</div>

<? include( '../inc/footer.inc' ); ?>

	</div>

</body>
</html>
