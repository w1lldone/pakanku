<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap.css CDN -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  
<?php 
$level="admin";
session_start();
if(!empty($_SESSION['nama'])){
	$level=$_SESSION['tingkat'];
}
if($level=='admin'){ ?>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Input Pakanku</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dasboard.php?module=bahan&act=bahan"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Bahan</a></li>
            <li><a href="dasboard.php?module=harga&act=harga"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Harga</a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
	<div class="container-fluid">
	<div class="row">
	 <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">            
            <li><a href="dasboard.php?module=bahan&act=bahan">Input Bahan</a></li>
            <li><a href="dasboard.php?module=harga&act=harga">Input Harga</a></li>
			<li><a href="dasboard.php?module=daftar&act=edit_bh">Daftar Bahan</a></li>			
          </ul>
		  <ul class="nav nav-sidebar">            
            <li><a href="dasboard.php?module=slk_bahan&act=input">Seleksi Bahan</a></li>
            <li><a href="dasboard.php?module=slk_harga&act=input">Seleksi Harga</a></li>						
          </ul>
     </div>

<?php } 
 else{ ?>
 	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Input Pakanku</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dasboard.php?module=bahan&act=saran_bh"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Bahan</a></li>
            <li><a href="dasboard.php?module=harga&act=saran_hg"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Harga</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
	<div class="container-fluid">
	<div class="row">
	 <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="dasboard.php?module=bahan&act=saran_bh">Saran Bahan</a></li>
            <li><a href="dasboard.php?module=harga&act=saran_hg">Saran Harga</a></li>
          </ul>
     </div>
 <?php } ?>
	
		<div id="page-wrapper">
<?php include "isi.php";  ?>
		</div>
	

    <!-- ===================
            SCRIPTS
    ======================== -->
    <!-- jQuery.js CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
                