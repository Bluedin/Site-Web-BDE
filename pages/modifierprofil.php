<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      /* Remove the navbar's default margin-bottom and rounded borders */ 
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
        color : red;
      }
      
      /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
      .row.content {height: 450px}
      
      /* Set gray background color and 100% height */
      .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
      }
      .panel-login{
        background-color : #e6e6e6;
      }
      
      /* Set black background color, white text and some padding */
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
      }
      
      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }
        .row.content {height:auto;} 
      }
    </style>
</head>
<body>

<!--
<?php 

$mailprofile = $_COOKIE["paul"];


try {
    $DB = new PDO('mysql:host=localhost;dbname=projetbde','root','');
    
  }
  catch(PDOException $e) { // msg erreur
    echo "La base de données n'est pas disponible, merci de réessayer plus tard.";
  }

  $nom = $DB->query('SELECT nom FROM user WHERE mail = "'.$mailprofile.'"');
  $rnom = $nom->fetch(PDO::FETCH_ASSOC);

  $prenom = $DB->query('SELECT prenom FROM user WHERE mail = "'.$mailprofile.'"');
  $rprenom = $prenom->fetch(PDO::FETCH_ASSOC);

  $mail = $DB->query('SELECT mail FROM user WHERE mail = "'.$mailprofile.'"');
  $rmail = $mail->fetch(PDO::FETCH_ASSOC);

  $motdepasse = $DB->query('SELECT password FROM user WHERE mail = "'.$mailprofile.'"');
  $rmotdepasse = $motdepasse->fetch(PDO::FETCH_ASSOC);

  $promo = $DB->query('SELECT promo FROM user WHERE mail = "'.$mailprofile.'"');
  $rpromo = $promo->fetch(PDO::FETCH_ASSOC);

  $phrase= $DB->query('SELECT phrasechoc FROM user WHERE mail = "'.$mailprofile.'"');
  $rphrase = $phrase->fetch(PDO::FETCH_ASSOC);

  var_dump($rmail);

?> 

-->


        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="acceuil.php">BDE Exia Cesi Toulouse</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="event.php">Events</a></li>
                <li><a href="#">Clubs</a></li>
                <li><a href="#">Store</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
               <ul class="nav navbar-nav navbar-right">
                   <li><a href="profile.php">Profile</a></li>
                   <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>
                  

                  <div class="panel-body">
                    <div class="row">

                      <div class="col-lg-12">
                      <h1>Modifier votre profil :</h1>

                        

                      </div>

                      <form id="" action="modif.php" method="post">
                  
                        <div class="form-group col-lg-6">
                          <label>Nom</label>
                          <input type="" name="nom" class="form-control" id="" value="">
                        </div>
                        
                        <div class="form-group col-lg-6">
                          <label>Prénom</label>
                          <input type="" name="prenom" class="form-control" id="" value="">
                        </div>
                        <div class="form-group col-lg-6">
                          <label>E-mail</label>
                          <input type="" name="email" class="form-control" id="" value="">
                        </div>
                        
                        <div class="form-group col-lg-6">
                          <label>Mot de passe</label>
                          <input type="password" name="motdepasse" class="form-control" id="" value="">
                        </div>
                         <div class="form-group col-lg-6">
                          <label>Promo</label>
                          <select name="promo" class="form-control">
                                  <option>A1</option>
                                  <option>A2</option>
                                  <option>A3</option>
                                  <option>A4</option>
                                  <option>A5</option>
                              </select>
                        </div>      
                        <div class="form-group col-lg-6">
                          <label>Phrase choc :</label>
                          <input type="" name="phrase" class="form-control" id="" value="">
                        </div>
                        <div class="col-lg-12">
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                      </form>
                      
                        
                  </div>
                    
                

        <div class="container">
          <div class="row">
          <hr>
            <div class="col-lg-12">
              <div class="col-md-8">
                <a href="#">Aide</a> | <a href="#">Mentions légales</a>    
              </div>
              <div class="col-md-4">
                <p class="muted pull-right">© 2017 Rémy Spada. All rights reserved</p>
              </div>
            </div>
          </div>
        </div>

</body>
</html>
