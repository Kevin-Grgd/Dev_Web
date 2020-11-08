var valeur;

function choisirNombre() {
  var min = parseInt(document.getElementById("borne_min").value);
  var max = parseInt(document.getElementById("borne_max").value);

  if (max < min) {
    alert("Le minimum est supérieur au maximum que tu as saisi pouilleux !");
    return false;
  }
  valeur = Math.floor(Math.random() * (max-min+1))+min;
  document.getElementById("aide").value="";
  document.getElementById("proposition").value="";
  return valeur;
}

function verifierNombre() {
  var val_prop = parseInt(document.getElementById("proposition").value);
  
  if (val_prop > valeur) {
    document.getElementById("aide").value="C'est moins";
  }
  if (val_prop < valeur) {
    document.getElementById("aide").value="C'est plus";
  }
  if (val_prop == valeur) {
    document.getElementById("aide").value="Gagné !";
  }
}