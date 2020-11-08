var a_trouver;
var longueur;
var lettres = [];
var nb_erreurs;
var words = new Array("capuchon", "parachute", "baobab", "lynx", "crocus", "cerise", "pluton", "visage", "fragile", "microbe", "passage", "royaume", "statuette", "typhon", "arsenic", "domino", "afrique", "iguane", "groseille", "lumineux");

function choisirMot() {
  var i;
  var choix = Math.floor(Math.random() * (words.length));
  a_trouver=words[choix];
  longueur=a_trouver.length;
  for (i=0;i<longueur;i++) {
    lettres[i] = (a_trouver.charAt(i));
  }
  afficheMot();
  
  console.log(choix);
  console.log(a_trouver);
  console.log(longueur);
  console.log(lettres);
}

function afficheMot() {
  var mot,i;

  for (i=0;i<longueur;i++) {
    
  }
  document.getElementById('mot').value = mot;

}
  