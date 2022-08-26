<?php include "../koneksi_database.php";
session_start();
if ($_SESSION['Role']!='admin'){
header("location:../");
}
 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-light" style="background-color: #9620da;">

    <a class="navbar-brand mr-1" href="index.html">A-STAR</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    <!-- Navbar -->

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
	  <li class="nav-item active">
        <a class="nav-link" href="lokasi_wahana.php">
		<i class="fas fa-map-marked-alt"></i>
          <span>Lokasi wahana</span>
        </a>
      </li>	
	   <li class="nav-item active">
        <a class="nav-link" href="graf.php">
		<i class="fas fa-map"></i>
          <span>Graf</span>
        </a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="user.php">
          <i class="fas fa-child"></i>
          <span>Data User</span>
        </a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="wahana.php">
          <i class="fas fa-child"></i>
          <span>Data Wahana</span>
        </a>
      </li>
	 
	<li class="nav-item active">
        <a class="nav-link" href="pembelian.php">
          <i class="fab fa-app-store-ios"></i>
          <span>Data Pembelian Tiket</span>
        </a>
      </li>	 
	   	 
	  <li class="nav-item active">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>	
	  
    </ul>
	
