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

      #logoexia{
      	width: 100%;
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
   
  </div>
</nav>
  
<!-- <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login"> -->
          

          <div class="panel-body">
            <div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Pas de compte ? Inscrivez-vous !</h3>
				
				<form id="" action="register.php" method="post">
                  
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
						<!-- <div class="btn-group">
	    					<button data-toggle="dropdown" class="btn btn-lg btn-default dropdown-toggle" type="button" name="promo">Promo <span class="caret"></span></button>
	    						<ul role="menu" class="dropdown-menu dropdown-menu-default">
	        						<li><a href="#">A1</a></li>
							        <li><a href="#">A2</a></li>
							        <li><a href="#">A3</a></li>
							        <li><a href="#">A4</a></li>
							        <li><a href="#">A5</a></li>
							    </ul>
						</div> -->
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
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
				</form>
							
			
			</div>
		
			<div class="col-md-6">
				<img src="exia.jpg" alt="Logo" id="logoexia">
				
				
			</div>
			
		</div>
	</section>
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
