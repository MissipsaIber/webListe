<?php
		$titre = $_POST['titre'];
		$description = $_POST['description'];	
		$var ="";
		$base = mysql_connect('localhost','root','');
		mysql_select_db('tp_gl',$base);
		if($titre==$var or $description==$var)
		{
			echo("veuillez remplir tous les champs");
		}
		else
		{
			$requette_ajout_liste='INSERT INTO liste VALUES("'.$titre.'","'.$description.'")';					
						
			mysql_query($requette_ajout_liste) or die('erreur sql'.$requette_ajout_liste.'</br>'.mysql_error());
			mysql_close();
			echo( "requete envoyer");
		}
?>