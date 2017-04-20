<?php
   try {
      $DB = new PDO ('mysql:host=localhost;dbname=projetbde', 'root','', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ));
      echo "C'est OK.";// objet pdo initialisé
    }
    catch(PDOException $e) { // msg erreur
      echo "La base de données n'est pas disponible, merci de réessayer plus tard.";
    }
 
  //récupération des valeurs des champs:
  //nom:
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
  //création de la requête SQL:

  try {
  $sth = $DB->prepare("INSERT INTO `user`(`nom`, `prenom`, `mail`, `password`, `promo`, `phrasechoc`) VALUES (?, ?, ?, ?, ?, ?)" ); 

  //exécution de la requête SQL:
  
 $res = $sth->execute(array($nom, $prenom, $email, $motdepasse, $promo, $phrase));

 // $res = $DB->exec("INSERT INTO `user`(`nom`, `prenom`, `mail`, `password`, `promo`, `phrasechoc`, `avatar`) VALUES ('test', 'test', 'test', 'test', 'test', 'test', 'test')");

  // var_dump($sth);
  var_dump($res);

}
      
    catch(Exception $e) { // msg erreur
      echo "Erreur SQL : ".$e->getMessage();
    }

 // var_dump($_POST);
 // var_dump($phrase);

  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($res)
  {
    header('Location: acceuil.php');
  }
  else
  {
    echo("L'insertion à échouée !") ;
  }
?>