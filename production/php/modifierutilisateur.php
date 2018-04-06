<?php

include('connect_base.php');


//récupération des données à modifier
$code=$_POST["code"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$tel=$_POST["tel"];
$cin=$_POST["cin"];
$photo=$_POST["photo"];
//requete de mise à jour de la table utilisateur
$requete="update individu 
set nomindividu='".$nom."', prenomindividu='".$prenom."', telindividu='".$tel."', cinindividu='".$cin."', pathphotoindividu='".$photo."' 
where idindividu = '".$code."'";
$resultat = mysql_query($requete) or die(mysql_error());



?>