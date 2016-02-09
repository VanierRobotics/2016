<link rel="stylesheet" type="text/css" href="<?=URL?>css/tutorial.css" property="stylesheet">
<?php $link = URL.$this->language.(($this->language === 'en') ? '/tutorial/': '/tutoriel/'); ?>

<div>
	<div id="tutorial_tab">
		<div id="tutorial_tab_title" class="tutorial_tab_link">Simplement JavaScript</div>
		<div class="tutorial_tab_link"><a href="<?=$link?>">Intro</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>math">Math</a></div>
		<div class="tutorial_tab_link">Fonctions</div><!-- Current Page -->
		<div class="tutorial_tab_link"><a href="<?=$link?>events">Événements</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>comments">Commentaires</a></div>
	</div>

	<div id="tutorial_body">
		<div id="tutorial_body_code">
			<script>
				function remplacer(){
					document.getElementById('number').innerHTML = 9001;
				}
			</script>
			<button onClick="remplacer()">Cliquez Moi!</button>
			<div id='number'>2</div>
		</div>

		<div id="tutorial_body_example">
			<?php
				$temp = htmlspecialchars("<html>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("<head>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("<script>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("function remplacer(){", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("document.getElementById('number').innerHTML = 9001;", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("}", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("</script>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("</head>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("<body>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("<button onClick=\"remplacer()\">Cliquez Moi!</button>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("<span id='number'>2</span>") . "<br />";
				$temp.= htmlspecialchars("</body>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("</html>", ENT_QUOTES) . "<br />";

				echo $temp;
			?>
		</div>

		<div id="tutorial_body_abstract">
			Ici on écrit notre script dans notre embalage script.<br />
			Quand on clique notre bouton, l'élément 'number'.
		</div>

		<div id="tutorial_body_explanation">
			<ul>
				<li>"function" declare une fonction.</li>
			</ul>
		</div>
	</div>
</div>