<link rel="stylesheet" type="text/css" href="<?=URL?>css/tutorial.css" property="">
<?php $link = URL.$this->language.(($this->language === 'en') ? '/tutorial/': '/tutoriel/'); ?>
<div>
  <div id="tutorial_tab">
    <div id="tutorial_tab_title" class="tutorial_tab_link">Simply JavaScript</div>
    <div class="tutorial_tab_link">Intro</div><!-- Current Page -->
    <div class="tutorial_tab_link"><a href="<?=$link?>math">Math</a></div>
    <div class="tutorial_tab_link"><a href="<?=$link?>functions">Functions</a></div>
    <div class="tutorial_tab_link"><a href="<?=$link?>events">Events</a></div>
    <div class="tutorial_tab_link"><a href="<?=$link?>comments">Comments</a></div>
  </div>

  <div id="tutorial_body">
    <div id="tutorial_body_code">
		<button onClick="document.getElementById('tutorial_body_code').innerHTML += Date()">Click Me!</button>
	</div>
	
    <div id="tutorial_body_example">
		<?php 
			$temp = htmlspecialchars("<html>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<body>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<button onClick=\"document.getElementById('tutorial_body_code').innerHTML += Date()\">Click Me!</button>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</body>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</html>", ENT_QUOTES) . "<br />";
			
			echo $temp;
		?>
	</div>
	
    <div id="tutorial_body_abstract">
		Here we have an example of what JavaScript looks like.<br />
		We created a HTML page with some JavaScript.<br />
		When we press the button, JavaScript appends the current date and time at the end of our HTML element "tutorial_body_code".
	</div>
	
    <div id="tutorial_body_explanation">
		<ul>
			<li>onClick() is a function for any HTML element to run a script when that element is clicked.</li>
			<li>getElementById('element').innerHTML accesses the HTML content of the current page.</li>
			<li>Date() returns a string with the current Date and Time.</li>
		</ul>
	</div>
  </div>
</div>