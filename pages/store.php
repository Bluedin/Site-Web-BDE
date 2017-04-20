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
                <li><a href="event.php">Events</a></li>
                <li><a href="#">Clubs</a></li>
                <li class="active"><a href="#">Store</a></li>
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

          <div class="col-lg-2">
            <div class="thumbnail">
             <img src="sweatexia.jpg" alt="">
                <div class="caption">

               <!--  <?php

                    try {
                        $DB = new PDO ('mysql:host=localhost;dbname=projetbde', 'root','');                  
                      }
                      catch(PDOException $e) { // msg erreur
                        echo "La base de données n'est pas disponible, merci de réessayer plus tard.";
                      }



                $infoproduit1 = "SELECT nom, prix, photo FROM store WHERE id=1";
                $infoproduit2 = "SELECT nom, prix, photo FROM store WHERE id=2";
                $infoproduit3 = "SELECT nom, prix, photo FROM store WHERE id=3";
                $infoproduit4 = "SELECT nom, prix, photo FROM store WHERE id=4";
               

              

                $req = $DB->query($infoproduit1);
                $req2 = $DB->query($infoproduit2);
                $req3 = $DB->query($infoproduit3);
                $req4 = $DB->query($infoproduit4);
                ?> -->


                  <h3>Sweat Exia</h3>
                  <p>Prix : <strong>35€</strong></p>
                  <p><a href="prod1.php" class="btn btn-primary">Acheter</a> </p>
                </div>
            </div>
          </div>
           

          <div class="col-lg-2">
            <div class="thumbnail">
              <img src="tshirtexia.jpg" alt="">
                <div class="caption">
                  <h3>Polo Exia</h3>
                  <p>Prix : <strong>25€</strong></p>
                  <p><a href="prod2.php" class="btn btn-primary">Acheter</a> </p>
                </div>
              </div>
            </div>
                
            <div class="col-lg-2"> 
              <div class="thumbnail">
                <img src="darkcookie.jpg" alt="">
                <div class="caption">
                  <h3>Dark Cookies</h3>
                  <p>Prix : <strong>N.C</strong></p>
                  <p><a href="prod3.php" class="btn btn-primary">Acheter</a> </p>
                </div>
              </div>
            </div>

            
        <form id="" action="addprod.php" method="post">
                  
          <div class="form-group col-lg-12">
            <label>Nom du produit :</label>
            <input type="" name="nom" class="form-control" id="" value="">
          </div>
          
          <div class="form-group col-lg-12">
            <label>Prix :</label>
            <input type="" name="prix" class="form-control" id="" value="">
          </div>
          <div class="form-group col-lg-12">
            <label>Nom de l'image (+extension) :</label>
            <input type="" name="url" class="form-control" id="" value="">
          </div>
          <div class="col-lg-12">
              <button type="submit" class="btn btn-danger">Ajouter un produit à la boutique</button>
            </div>
        </form>  
        </div>
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
