<?php

  // 1.1.1
  function decoupeEn2Tableaux($chaine) {
      $prenom = [];
      $age = [];
      
      // On découpe dans un tableau la chaîne de caractères par rapport à l'espace
      $tab = explode(' ', $chaine);

      // On utilise une boucle classique pour parcourir le tableau par rapport à sa taille (count)
      for ($i = 0; $i < count($tab); $i++) {
          // En fonction de la parité de l'index on a un prenom (pair) ou un age (impair)
          if ($i % 2 == 0) {
              $prenom[] = $tab[$i]; //ou array_push($prenoms, $tab[$i])
          } else {
              $age[] = $tab[$i]; 
          }
      }
      
      return [$prenom, $age];
  }
  
  function decoupeEn2TableauxBis($chaine) {
      $prenom = [];
      $age = [];
      
      $tab = explode(' ', $chaine);

      // On parcourt le tableau en récupérant pour chaque boucle l'index et la valeur associée
      foreach ($tab as $index => $value) {
          if ($index % 2 == 0) {
              $prenom[] = $value; 
          } else {
              $age[] = $value; 
          }        
      }
      
      return [$prenom, $age];
  }

  // 1.1.2
  function afficheListeOrdonnee($tab1, $tab2) {
      echo '<ol>';
      // array_keys permet de récupérer la liste des index de tab1
      // (tab1 et tab2 sont des tableaux de même dimension, on aurait
      // pu ajouter un test pour le vérifier
      //
      // Par exemple array_keys(['a','b','c']) retourne [0,1,2] parce
      // que ['a','b','c'] correspond en fait au tableaux avec ces
      // index [0 => 'a', 1 => 'b', 2 => 'c'] 
      //
      // le résultat de array_keys(['a','b','c']) peut également être
      // vu comme [0 => 0, 1 => 1, 2 => 2] 
      foreach(array_keys($tab1) as $index) {
          echo "<li>$tab1[$index] a $tab2[$index] ans</li>";
      }
      echo '</ol>';
  }

  // 1.2.1
  function decoupeEnTableauAssociatif($chaine) {
      $personnes = [];
      $tab = explode(' ', $chaine);

      // On effectue une boucle qui s'incrémente de 2 pour sauter
      // l'age et ne partir que sur un prénom
      for ($i = 0; $i < count($tab); $i = $i + 2) {
          $personnes[$tab[$i]] = $tab[$i+1];
      }
      
      return $personnes;
  }

  // 1.2.2
  function afficheListeNonOrdonnee($personnes) {
      echo '<ul>';
      // Parcours classique d'un tableau associatif
      foreach ($personnes as $prenom => $age) {
          echo "<li>$prenom a $age ans</li>";
      }
      echo '</ul>';
  }
  
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tableau</title>
  </head>
  <body>
    <h1>Tableaux</h1>
    <?php
      $chaine = 'Guillaume 32 Sébastien 37 Vincent 15 Agathe 21';
      $result = decoupeEn2Tableaux($chaine);
      afficheListeOrdonnee($result[0], $result[1]);
      
      $result2 = decoupeEnTableauAssociatif($chaine);
      afficheListeNonOrdonnee($result2);
      ?>

  </body>
</html>


