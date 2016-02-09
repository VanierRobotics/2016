<link rel="stylesheet" type="text/css" href="<?=URL?>css/tutorial.css">
<?php $link = URL.$this->language.(($this->language === 'en') ? '/tutorial/': '/tutoriel/'); ?>

<div>

	<div id="tutorial_tab">
		<div id="tutorial_tab_title" class="tutorial_tab_link">Simplement JavaScript</div>
		<div class="tutorial_tab_link"><a href="<?=$link?>">Intro</a></div>
		<div class="tutorial_tab_link">Math</div><!-- Current Page -->
		<div class="tutorial_tab_link"><a href="<?=$link?>functions">Fonctions</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>events">Événements</a></div>
		<div class="tutorial_tab_link"><a href="<?=$link?>comments">Commentaires</a></div>
	</div>

	<div id="tutorial_body">
		<div id="tutorial_body_example">
			<?php
				$temp = htmlspecialchars("var x = 3", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("3", ENT_QUOTES) . "<br />" . "<br />";
				$temp.= htmlspecialchars("x = x + 3", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("6", ENT_QUOTES) . "<br />". "<br />". "<br />". "<br />";
				$temp.= htmlspecialchars("Autres Opérateurs:", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("x += 2", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("x -= 3", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("x = x * x", ENT_QUOTES) . "<br />";
				$temp.= htmlspecialchars("x = x / x", ENT_QUOTES) . "<br />";

				echo $temp;
			?>
		</div>

		<div id="tutorial_body_abstract">
			Ici on déclare une variable x à 3 et puis on y ajoute 3 encore.<br />
			Ensuite d'autres opérateurs sont démontrés.<br />
		</div>

		<div id="tutorial_body_explanation">
			<ul>
				<li>"=" assigne l'opération à la droite à la variable à la gauche.</li>
				<li>"+=" ajoute l'opération à la droite à la variable à la gauche.</li>
				<li>"-=" soustrait l'opération à la droite de la variable à la gauche.</li>
				<li>"*" est l'opérateur de la multiplication.</li>
				<li>"/" est l'opérateur de la division.</li>
			</ul>
		</div>
	</div>
</div>