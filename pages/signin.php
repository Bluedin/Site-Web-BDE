<?php

try {
		$DB = new PDO ('mysql:host=localhost;dbname=projetbde', 'root','');
		echo "C'est OK.";// objet pdo initialisé
	}
	catch(PDOException $e) { // msg erreur
		echo "La base de données n'est pas disponible, merci de réessayer plus tard.";
	}



$sqllogin = "SELECT mail, password FROM user WHERE mail=\"".$_REQUEST['username']."\" AND password=\"".$_REQUEST['password']."\"";
var_dump($sqllogin);

setcookie('paul', $_REQUEST['username']); // set cookie sur le mail

$req = $DB->query($sqllogin); // query $sqllogin

$count=$req->rowCount(); // si trouvé alors


if ($count) {
	header('Location: event.php');
}
else
{
	header('Location: inscription.php');
}

?>