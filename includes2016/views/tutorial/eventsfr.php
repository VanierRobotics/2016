<link rel="stylesheet" type="text/css" href="<?=URL?>css/tutorial.css">
<?php $link = URL.$this->language.(($this->language === 'en') ? '/tutorial/': '/tutoriel/'); ?>

<div onload="alert('this page has finished loading!')">
	<div id="tutorial_tab">
		<div id="tutorial_tab_title" class="tutorial_tab_link">Simplement JavaScript</div>
		<div class="tutorial_tab_link"><a href="<?=$link?>">Intro</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>math">Math</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>functions">Fonctions</a></div><!-- Current Page -->
		<div class="tutorial_tab_link">Événements</div><!-- Current Page -->
		<div class="tutorial_tab_link"><a href="<?=$link?>comments">Commentaires</a></div>
	</div>

	<div id="tutorial_body">
		<div id="tutorial_body_example">
			<?php
				$temp = htmlspecialchars("<html>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("<body onload=\"alert('Cette page est prête!')\">", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("<p> paragraph </p>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("</body>", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("</html>", ENT_QUOTES) . "<br />";

				echo $temp;
			?>
		</div>

		<div id="tutorial_body_abstract">
			Voic un exemple d'événement en JavaScript.<br />
			En effet, on à déjà vu des événements en JavaScript quand on a utilisé onClick.<br />
			Ces événements sont bons dans deux cas: prendre les contributions de l'utilisatuer et faire du débuggage!
		</div>

		<div id="tutorial_body_explanation">
			<ul>
				<li>onload() est une fonction pour tout élément HTML qui joue le script inscrit quand l'élément à fini de télécharger.</li>
			</ul>
		</div>
	</div>
</div>