<?php 
 try {
      $DB = new PDO ('mysql:host=localhost;dbname=projetbde', 'root','', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ));
     
    }
    catch(PDOException $e) { // msg erreur
      echo "La base de données n'est pas disponible, merci de réessayer plus tard.";
    }

    $nom     = $_POST["nom"] ;
  
  $prix = $_POST["prix"] ;
  
  $url = $_POST["url"] ;


  try {
  $sth = $DB->prepare("INSERT INTO `store`(`nomproduit`, `prix`, `photo`) VALUES (?, ?, ?)" ); 

  //exécution de la requête SQL:
  
 $res = $sth->execute(array($nom, $prix, $url));


  

}
      
    catch(Exception $e) { // msg erreur
      echo "Erreur SQL : ".$e->getMessage();
    }

?>