<?php
			/*$data['nom']      = $_POST['nom'];
	        $data['email']    = $_POST['email'];
	        $data['prenom']   = $_POST['prenom'];
	        $data['pseudo']   = $_POST['pseudo'];*/

	        /* A ajouter à la fonction store() de UserController.php */

	        $message = "Bonjour " . $data['pseudo'] . " ton profil AFK est maintenant créé.
	        	  Rends toi vite sur http://afk.kuriyama.moe/profile/" . $data['pseudo'] . " !";


			if(mail($data['email'], "Bienvenue sur AFK" , $message))
			{
				echo "Vos informations vous ont été envoyées par email sur : " . $data['email'] .;
			}
			else
			{
				echo "L'email de confirmation n'a pas pu être envoyé.";
			}
?>