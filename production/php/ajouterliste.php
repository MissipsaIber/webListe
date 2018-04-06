<?php

include('connect_base.php');


$titre=$_POST['titList'];
$description=$_POST['descList'];
$type=$_POST['type'];



$user=1;
$query="insert into Liste ( Title  , description , Visibility ,IdUser) 
values ('".$titre."','".$description."','".$type."','".$user."')";
// execution de la requète
$resultat = mysql_query($query) or die("erreur dans la requete : " . $query);
// deconnexion de la base
mysql_close(); 
?>
<script language="JavaScript">
	alert("requete exécuté avec succée");
	window.location.replace("../index.html");
</script>
<?php
?>