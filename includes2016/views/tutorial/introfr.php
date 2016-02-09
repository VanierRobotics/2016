<link rel="stylesheet" type="text/css" href="<?=URL?>css/tutorial.css" property="">
<?php $link = URL.$this->language.(($this->language === 'en') ? '/tutorial/': '/tutoriel/'); ?>
<div>
	<div id="tutorial_tab">
		<div id="tutorial_tab_title" class="tutorial_tab_link">Simplement JavaScript</div>
		<div class="tutorial_tab_link">Intro</div><!-- Current Page -->
		<div class="tutorial_tab_link"><a href="<?=$link?>math">Math</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>functions">Fonctions</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>events">Événements</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>comments">Commentaires</a></div>
	</div>

	<div id="tutorial_body">
		<div id="tutorial_body_code">
			<button onClick="document.getElementById('tutorial_body_code').innerHTML += Date()">Cliquez Moi!</button>
		</div>

		<div id="tutorial_body_example">
			<?php
			$temp = htmlspecialchars("<html>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<body>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("<button onClick=\"document.getElementById('tutorial_body_code').innerHTML += Date()\">Cliquez Moi!</button>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</body>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</html>", ENT_QUOTES) . "<br />";

			echo $temp;
			?>
		</div>

		<div id="tutorial_body_abstract">
			Voici un exemple de JavaScript.<br />
			Nous avons créé une page HTML avec du JavaScript..<br />
			Quand on clique sure le bouton, JavaScript ajoute la date et le temps présent à la fin de notre élément HTML "tutorial_body_code".
		</div>

		<div id="tutorial_body_explanation">
			<ul>
				<li>onClick() est une fonction pour tout élément HTML qui, en appuyant l'élément, joue le script que vous l'aviez assigné.</li>
				<li>getElementById('element').innerHTML nous donne accès au contenu HTML de l'élément 'element'.</li>
				<li>Date() nous done la date et le temps présent.</li>
			</ul>
		</div>
	</div>
</div>