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
        <li class="active"><a href="event.php">Events</a></li>
        <li><a href="#">Clubs</a></li>
        <li><a href="#">Store</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
            <li><a href="profile.php">Profil</a></li>
            <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<!-- <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login"> -->
          

          <div class="panel-body">
            <div class="row">
              <div class="col-lg-4">

                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <h3 class="panel-title">Apéro puis entrée à l'Insane</h3>
                  </div>
                    <div class="panel-body">06/05/2017 - 11h30 - Parc des expos
                    <button type="button" class="btn btn-default">Voir</button>
                    </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <h3 class="panel-title">Vomi sur le parvis du stadium</h3>
                  </div>
                    <div class="panel-body">06/05/2017 - 20h05 - Dèrrière Alban Lafont
                    <button type="button" class="btn btn-default">Voir</button></div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <h3 class="panel-title">Début de l'apocalypse</h3>
                  </div>
                    <div class="panel-body">06/05/2017 - 22h20 - Pluton
                    <button type="button" class="btn btn-default">Voir</button></div>
                </div>
              </div>
                <!-- <form id="login-form" action="connexion.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="passlost.php" tabindex="5" class="forgot-password">Forgot Password?</a>  
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form> 
                        <div class="row">
                          
                          <div class="col-xs-12">
                            <a href="#" id="register-form-link" text-align="center">Register</a>
                          </div>
                        </div>
                        -->
              </div>
            </div>
          </div>
        </div>
      </div>
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
