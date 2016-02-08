<link rel="stylesheet" type="text/css" href="stylesheet.css">

<body>
<div>
  <div id="tutorial_tab">
    <div id="tutorial_tab_title" class="tutorial_tab_link">Simply JavaScript</div>
    <div class="tutorial_tab_link"><a href="intro.php">Intro</a></div>
    <div class="tutorial_tab_link"><a href="math.php">Math</a></div>
    <div class="tutorial_tab_link">Functions</div><!-- Current Page -->
    <div class="tutorial_tab_link"><a href="events.php">Events</a></div>
    <div class="tutorial_tab_link"><a href="comments.php">Comments</a></div>
  </div>

  <div id="tutorial_body">
    <div id="tutorial_body_code">
	<script>
		function replace(){
			document.getElementById('number').innerHTML = 9001;
		}
	</script>
		<button onClick="replace()">Click Me!</button>
		<div id='number'>2</div>
	</div>
	
    <div id="tutorial_body_example">
		<?php 
			$temp = htmlspecialchars("<html>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<head>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<script>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("function replace(){", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("document.getElementById('number').innerHTML = 9001;", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("}", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</script>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</head>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<body>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<button onClick=\"replace()\">Click Me!</button>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<span id='number'>2</span>") . "<br />";
			$temp.= htmlspecialchars("</body>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</html>", ENT_QUOTES) . "<br />";
			
			echo $temp;
		?>
	</div>
	
    <div id="tutorial_body_abstract">
		Here we create a script tag under head and write a function.<br />
		We created a HTML page with some JavaScript.<br />
		When we press the button, JavaScript replaces the value in "number" with 9001.
	</div>
	
    <div id="tutorial_body_explanation">
		<ul>
			<li>"function" declares a function.</li>
		</ul>
	</div>
  </div>
</div>
</body>