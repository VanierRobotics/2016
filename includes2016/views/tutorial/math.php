<link rel="stylesheet" type="text/css" href="<?=URL?>css/tutorial.css" property="stylesheet">
<?php $link = URL.$this->language.(($this->language === 'en') ? '/tutorial/': '/tutoriel/'); ?>

<div>
	<div id="tutorial_tab">
		<div id="tutorial_tab_title" class="tutorial_tab_link">Simply JavaScript</div>
		<div class="tutorial_tab_link"><a href="<?=$link?>">Intro</a></div>
		<div class="tutorial_tab_link">Math</div><!-- Current Page -->
		<div class="tutorial_tab_link"><a href="<?=$link?>functions">Functions</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>events">Events</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>comments">Comments</a></div>
	</div>

	<div id="tutorial_body">
		<div id="tutorial_body_example">
			<?php
				$temp = htmlspecialchars("var x = 3", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("3", ENT_QUOTES) . "<br />" . "<br />";
				$temp.= htmlspecialchars("x = x + 3", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("6", ENT_QUOTES) . "<br />". "<br />". "<br />". "<br />";
				$temp.= htmlspecialchars("Other Operators:", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("x += 2", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("x -= 3", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("x = x * x", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("x = x / x", ENT_QUOTES) . "<br />";

				echo $temp;
			?>
		</div>

		<div id="tutorial_body_abstract">
			Here we declare a variable x to be 3 and then add 3 to it again, raising it to 6.<br />
			Then we show a short list of other valid arithmetic operators.<br />
		</div>

		<div id="tutorial_body_explanation">
			<ul>
				<li>the "=" sign assigns the operation on the right to the variables to its left.</li>
				<li>the "+=" adds the operation on the right to the variable on the left.</li>
				<li>the "-=" subtracts the operation on the right from the variable on the left.</li>
				<li>the "*" operator is the multiplication sign.</li>
				<li>the "/" operator is the division sign.</li>
			</ul>
		</div>
	</div>
</div>