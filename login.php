<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap.css CDN -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/login.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
  
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Masuk Admin Pakanku</h1>
            <div class="account-wall">
                <img class="profile-img" src="images/ft-img.png" alt="">
				<form role="form" class="form-signin" method="post" action="ceklogin.php">
				 <fieldset>
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
                <button class="btn btn-lg btn-success btn-block">Login</a>
				 </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
	<!-- ===================
            SCRIPTS
    ======================== -->
    <!-- jQuery.js CDN -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/login.js"></script>
  </body>
</html>