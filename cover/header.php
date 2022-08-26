<?php include "koneksi_database.php";
session_start();
 ?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jawa Timur Park 1</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body class="bg-dark">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #9620da;">   
    <div class="container">
    <i class="fas fa-holly-berry"></i>
      <a class="navbar-brand" href="#">Jawa Timur Park 1</a>
	  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <!-- Image and text -->
		<a class="nav-link" href="index_pengunjung.php">
		<i class="fas fa-home"></i>
		Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">
		<i class="fas fa-cat"></i>
		About</a>
          </li>
		  <?php if ($_SESSION["username"]!=null){
			  ?>
		  
		  
		   <li class="nav-item">
            <a class="nav-link" href="profil.php">
		<i class="fas fa-user"></i>
		Profil</a>
          </li>
		  
		  <?php } else { ?>
		   <li class="nav-item">
            <a class="nav-link" href="login.php">
		<i class="fas fa-user"></i>
		Login</a>
          </li>
		  
		  <?php } ?>
		  
          <li class="nav-item">
            <a class="nav-link" href="keranjang.php">
			<i class="fas fa-funnel-dollar"></i>
			Pembayaran</a>
			 </li>
          
          <li class="nav-item">
          </li>
        </ul>
      </div>
    </div>
  </nav>
