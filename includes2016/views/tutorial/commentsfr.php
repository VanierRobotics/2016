<link rel="stylesheet" type="text/css" href="stylesheet.css">

<body>
<div>
  <div id="tutorial_tab">
    <div id="tutorial_tab_title" class="tutorial_tab_link">Simplement JavaScript</div>
    <div class="tutorial_tab_link"><a href="introfr.php">Intro</a></div>
    <div class="tutorial_tab_link"><a href="mathfr.php">Math</a></div>
    <div class="tutorial_tab_link"><a href="functionsfr.php">Fonctions</a></div>
    <div class="tutorial_tab_link"><a href="eventsfr.php">Événements</a></div>
    <div class="tutorial_tab_link">Commentaires</div><!-- Current Page -->
  </div>

  <div id="tutorial_body">
    <div id="tutorial_body_example">
		<?php 
			$temp = htmlspecialchars("<script>", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("// Ceci est un commentaire", ENT_QUOTES) . "<br />" . "<br />";
			$temp.= htmlspecialchars("// Cette ligne", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("var x = 3", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("3", ENT_QUOTES) . "<br />" . "<br />";
			$temp.= htmlspecialchars("// Ceci ajoute 3 à x", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("x += 3", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("6", ENT_QUOTES) . "<br />";
			$temp.= htmlspecialchars("</script>", ENT_QUOTES) . "<br />";
			
			echo $temp;
		?>
	</div>
	
    <div id="tutorial_body_abstract">
		Ici on démontre les commentaires.<br />
		Tout ligne qui commence par "//" est un commentaire en JavaScript.<br />
		JavaScript ignore tout commentaire, donc si l'on écrit du code là dedans, ça ne comptera pas.<br />
		Comme vous auriez pu deviner, les commentaires sont sensés commenter ou expliquer votre code..
	</div>
	
    <div id="tutorial_body_explanation">
		<ul>
			<li>Soyez certain de commenter votre code pour que vous le comprendriez quand vous y reviendrez.</li>
		</ul>
	</div>
  </div>
</div>
</body>