<?php

//1.1 Version 1
//1
function decoupeEn2Tableaux($chaine) {
	$prenom = [];
	$age = [];
	$tableau = explode(' ',$chaine);
	$taille_tab = count($tableau);

	for($i=0;$i<$taille_tab-1;$i++) {
		if ($i % 2 = 0) {
			$prenom[] = $tableau[$i];
			$age[] = $tableau[$i+1];
		}
	}
	return [$prenom,$age];
}


//2
function afficheListeOrdonne($tab1,$tab2) {
	$taille_tab = count($tab1);

	echo '<ol>';

	for($i=0;$i<$taille_tab;$i++) {
		echo '<li>'.$tab1[$i].' a '.$tab2[$i].' ans</li>';
	}
	echo '</ol>';
}


//1.2 Version 2
//1
function decoupeEnTableauAssociatif($chaine) {
	$tab = explode(' ',$chaine);
	$personne = [];
	$taille_tab = count($tab);

	for($i=0;$i<$taille_tab-1; $i++) {
		if ($i % 2 = 0) {
			$personne = [$tab[$i] = $tab[$i+1]];
		}
	}
	return $personne;
}

//2
function afficheListeNonOrdonnee($tab) {
	echo '<ul>';

	foreach ($personne as $prenom => $age) {
		echo '<li>'.$prenom.' a '.$age.' ans</li>';
	}
	echo '</ul>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TD 5</title>
</head>
<body>
	<h2>Version 1</h2>
	<?php
	//$chaine = "Guillaume 32 Sébastien 37 Vincent 15 Agathe 21";

	//$tab = decoupeEn2Tableaux($chaine);
	//afficheListeOrdonne($tab[1],$tab[2]);
	?>

	<h2>Version 2</h2>
	<?php
	//$tab = decoupeEnTableauAssociatif($chaine);
	//afficheListeNonOrdonnee($tab);
	?>
</body>
</html>