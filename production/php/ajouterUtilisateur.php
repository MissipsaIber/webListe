<?php
include('connect_base.php');

$pseudo=$_POST['pseudoUser'];
$password=$_POST['passeword'];
$permession=$_POST['userPermission'];
$role=$_POST['optionsRadios'];





$query="insert into utilisateur ( pseudo  , passeword , permission ,role) 
values ('".$pseudo."','".$password."','".$permession."','".$role."')";
// execution de la requète
$resultat = mysql_query($query) or die("erreur dans la requete : " . $query);
// deconnexion de la base
mysql_close(); 
echo ("requette envoye");
?>
