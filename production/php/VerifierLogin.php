<?php
include("connect_base.php");
$login=$_POST['login'];
$password=$_POST['password'];

	//extract($_POST);
	// on recupère le password de la table qui correspond au login du visiteur
	$sql = "select passeword from utilisateur where pseudo='".$login."'";
	$req = mysql_query($sql) or die('error');
	$data = mysql_fetch_assoc($req);
	if($data['passeword'] != $password) 
	{
	?>
	<script language="JavaScript">
	alert("Le login ou le mot de passe que vous avez saisie est erroné. Merci de recommencer");
	window.location.replace("../indexlogin.html");// On inclut le formulaire d'identification
	</script>
	<?php
	//Une fenêtre d'alerte s'affiche lorsque le login ou le mot de passe est invalide et renvoit vers la page pour se logger
	}
	/*else {
	session_start(); //on démarre une session
	$_SESSION['login'] = $login; //la variable de session $_SESSION['login'] récupère le login saisi
	header("Location: ../index.htm");// lien vers la page d'accueil de l'espace privé 
	}
}
else {
	?>
	<script language="JavaScript">
	alert("Vous avez oublié de remplir un champ. Merci de recommencer");
	window.location.replace("indexlogin.html");
	</script>*/
	//<?php
//Une fenêtre d'alerte s'affiche lorsque le login ou le mot de passe est vide et renvoit vers la page pour se logger	
//}
?>