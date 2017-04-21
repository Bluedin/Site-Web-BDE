<?php
try {
    $DB = new PDO('mysql:host=localhost;dbname=projetbde','root','');

    $sql = 'SELECT COUNT(*) AS nb FROM store';
    $result = $DB->query($sql);
    $columns = $result->fetch();
    $nb = $columns['nb'];
    $inb = (int)$nb;
    $idproduit= $inb;
    $i = 1;

    while ($idproduit != 0) {

    $url = $DB->query('SELECT photo FROM store WHERE id="'.$idproduit.'"');
    $prix = $DB->query('SELECT prix FROM store WHERE id="'.$idproduit.'"');
    
    $rurl = $url->fetch(PDO::FETCH_ASSOC);
    $rprix = $prix->fetch(PDO::FETCH_ASSOC);

    $urlpic = implode("",$rurl);
    $prixpic = (int)$rprix;

    // var_dump($idproduit);
    // var_dump($urlpic);
    // var_dump($prixpic);
    
    $idproduit--;

  }
    
   while ( $i <= $nb) {
   	echo '<div class="col-lg-2"> 
              <div class="thumbnail">
                <img src="'.$urlpic.'" alt="Produit">
                <div class="caption">
                  <h3>Nom :</h3>
                  <p>Prix : <strong>'.$prixpic.'</strong></p>
                  <p><a href="achat.php" class="btn btn-primary">Acheter</a> </p>
                </div>
              </div>
            </div> ';
   	
   	$i = $i+1;
   }

} 

catch(PDOException $e) {
    echo 'Erreur PDO : '.$e->getMessage();
}
?>

