<?php 
try {
		$DB = new PDO ('mysql:host=localhost;dbname=projetbde', 'root','');
		echo "C'est OK.";// objet pdo initialisé
	}
	catch(PDOException $e) { // msg erreur
		echo "La base de données n'est pas disponible, merci de réessayer plus tard.";
	}

	$mailprofile = $_COOKIE["paul"];

  $nom     = $_POST["nom"] ;
  //prenom:
  $prenom = $_POST["prenom"] ;
  //adresse:
  $email = $_POST["email"] ;
  //code postal:
  $motdepasse       = $_POST["motdepasse"] ;
  //numéro de téléphone:
  $promo      = $_POST["promo"] ;
 
  $phrase       = $_POST["phrase"] ;


	$sqlmodifprofil = 'UPDATE user SET nom="'.$nom.'", prenom="'.$prenom.'", mail="'.$email.'", password="'.$motdepasse.'", promo="'.$promo.'", phrasechoc="'.$phrase.'" WHERE mail="'.$mailprofile .'";';
	

	$val = $DB->exec($sqlmodifprofil);
	
	header('Location: event.php');
	
?>