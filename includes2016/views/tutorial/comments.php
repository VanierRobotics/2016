<link rel="stylesheet" type="text/css" href="stylesheet.css">

<body>
<div>
  <div id="tutorial_tab">
    <div id="tutorial_tab_title" class="tutorial_tab_link">Simply JavaScript</div>
    <div class="tutorial_tab_link"><a href="intro.php">Intro</a></div>
    <div class="tutorial_tab_link"><a href="math.php">Math</a></div>
    <div class="tutorial_tab_link"><a href="functions.php">Functions</a></div>
    <div class="tutorial_tab_link"><a href="events.php">Events</a></div>
    <div class="tutorial_tab_link">Comments</div><!-- Current Page -->
  </div>

  <div id="tutorial_body">
    <div id="tutorial_body_example">
		<?php 
			$temp = htmlspecialchars("<script>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("// This is a comment", ENT_QUOTES) . "<br />" . "<br />";
			$temp.= htmlspecialchars("// This initializes x to 3", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("var x = 3", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("3", ENT_QUOTES) . "<br />" . "<br />";
			$temp.= htmlspecialchars("// This adds 3 to x", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("x += 3", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("6", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</script>", ENT_QUOTES) . "<br />";
			
			echo $temp;
		?>
	</div>
	
    <div id="tutorial_body_abstract">
		Here we have comments.<br />
		Any line preceded by a "//" is a comment in JavaScript.<br />
		Comments are always overlooked by JavaScript, effectively not showing as a line of code.<br />
		As you may have guessed, they are meant only to comment your code.
	</div>
	
    <div id="tutorial_body_explanation">
		<ul>
			<li>Make sure to comment your code, so you never get lost when you come back to some old code.</li>
		</ul>
	</div>
  </div>
</div>
</body>