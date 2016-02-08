<link rel="stylesheet" type="text/css" href="stylesheet.css">

<body onload="alert('this page has finished loading!')">
<div>
  <div id="tutorial_tab">
    <div id="tutorial_tab_title" class="tutorial_tab_link">Simplement JavaScript</div>
    <div class="tutorial_tab_link"><a href="introfr.php">Intro</a></div>
    <div class="tutorial_tab_link"><a href="mathfr.php">Math</a></div>
    <div class="tutorial_tab_link"><a href="functionsfr.php">Fonctions</a></div>
    <div class="tutorial_tab_link">Événements</div><!-- Current Page -->
    <div class="tutorial_tab_link"><a href="commentsfr.php">Commentaires</a></div>
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
</body>