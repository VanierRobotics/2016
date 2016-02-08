<link rel="stylesheet" type="text/css" href="stylesheet.css">

<body onload="alert('this page has finished loading!')"> 
<div>
  <div id="tutorial_tab">
    <div id="tutorial_tab_title" class="tutorial_tab_link">Simply JavaScript</div>
    <div class="tutorial_tab_link"><a href="intro.php">Intro</a></div>
    <div class="tutorial_tab_link"><a href="math.php">Math</a></div>
    <div class="tutorial_tab_link"><a href="functions.php">Functions</a></div>
    <div class="tutorial_tab_link">Events</div><!-- Current Page -->
    <div class="tutorial_tab_link"><a href="comments.php">Comments</a></div>
  </div>

  <div id="tutorial_body">
	
    <div id="tutorial_body_example">
		<?php 
			$temp = htmlspecialchars("<html>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<body onload=\"alert('this page has finished loading!')\">", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<p> paragraph </p>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</body>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</html>", ENT_QUOTES) . "<br />";
			
			echo $temp;
		?>
	</div>
	
    <div id="tutorial_body_abstract">
		Here we have an example of a JavaScript event.<br />
		In fact, we've seen JavaScript events since we were using the onClick property.<br />
		These events are great for two things: handling user input and debugging!
	</div>
	
    <div id="tutorial_body_explanation">
		<ul>
			<li>onload() is a function for any HTML element to run a script when that element has finished loading.</li>
		</ul>
	</div>
  </div>
</div>
</body>