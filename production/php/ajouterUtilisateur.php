<?php
include('connect_base.php');

$pseudo=$_POST['pseudoUser'];
$password=$_POST['passeword'];
$password1=$_POST['passeword1'];
$permession=$_POST['userPermission'];

$role=$_POST['optionsRadios'];

if(strcmp($password,$password1)!==0){
echo ("le mot de passe n'est pa identique");
}

else {

$query="insert into utilisateur ( pseudo  , passeword , permission ,role) 
values ('".$pseudo."','".$password."','".$permession."','".$role."')";
// execution de la requète
$resultat = mysql_query($query) or die("erreur dans la requete : " . $query);
// deconnexion de la base
mysql_close(); 
echo ("requette envoye");}
?>
