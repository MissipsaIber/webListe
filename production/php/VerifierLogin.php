<?php
<<<<<<< HEAD
include('connect_base.php');
$passe=$_POST['password'];
$login=$_POST['login'];
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass']) ) {
	extract($_POST);
	// on recupère le password de la table qui correspond au login du visiteur
	
$sql = "select passeword from utilisateur where pseudo='".$login."'";
	$resultat = mysql_query($sql) or die(mysql_error());
	$row=mysql_fetch_row($resultat)
	if($row[0] != $passe) 
=======
include("connect_base.php");
$login=$_POST['login'];
$password=$_POST['password'];

	//extract($_POST);
	// on recupère le password de la table qui correspond au login du visiteur
	$sql = "select passeword from utilisateur where pseudo='".$login."'";
	$req = mysql_query($sql) or die('error');
	$data = mysql_fetch_assoc($req);
	if($data['passeword'] != $password) 
>>>>>>> e257609773f3c44ae0ac8abe9b38ee4f8688c645
	{
	?>
	<script language="JavaScript">
	alert("Le login ou le mot de passe que vous avez saisie est erroné. Merci de recommencer");
<<<<<<< HEAD
	window.location.replace("indexlogin.html");// On inclut le formulaire d'identification
=======
	window.location.replace("../indexlogin.html");// On inclut le formulaire d'identification
>>>>>>> e257609773f3c44ae0ac8abe9b38ee4f8688c645
	</script>
	<?php
	//Une fenêtre d'alerte s'affiche lorsque le login ou le mot de passe est invalide et renvoit vers la page pour se logger
	}
<<<<<<< HEAD
	else {
	session_start(); //on démarre une session
	$_SESSION['login'] = $login; //la variable de session $_SESSION['login'] récupère le login saisi
	header("Location:../index.htm");// lien vers la page d'accueil de l'espace privé 
	}
}



=======
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
>>>>>>> e257609773f3c44ae0ac8abe9b38ee4f8688c645
?>