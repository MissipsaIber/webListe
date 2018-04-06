
<html>
<head>
<title>Liste des des utilisateur</title>
</head>
<body>
<?php
include('connect_base.php');


$requete = "SELECT IdUser , pseudo  , passeword, permission,role 
			FROM utilisateur;";	
			
$resultat = mysql_query($requete) or die(mysql_error());

echo ("requette envoye");

while ($row=mysql_fetch_row($resultat))
{}

?>


</body>
</html>