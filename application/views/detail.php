<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?= NAMA_APLIKASI?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/landing/')?>images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/landing/')?>css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landing/')?>css/materialdesignicons.min.css" />
		
        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landing/')?>css/style.css" />
		<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
    	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
    </head>

    <body class=" bg-light">

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark bg-primary">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="<?= site_url()?>">
                	<h3 class="logo-light text-white"><?= NAMA_APLIKASI?></h3>
                	<h4 class="logo-dark text-primary"><b><?= NAMA_APLIKASI?></b></h4>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                     <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a href="<?= site_url()?>" class="nav-link">Beranda</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= site_url('Beranda/data_gym')?>" class="nav-link">Data Wahana</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                        <li class="nav-item">
                            <a href="<?= site_url('Auth')?>" class="nav-link">Login <i class="mdi mdi-login-variant"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- contact start -->
        <section class="section pb-0" id="contact">
            <div class="bg-shape">
            </div>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 mt-4">
                    	<div class="card">
                    	<div class="card-body">
                    	<a class="btn btn-primary" href="<?= site_url('Beranda/data_gym')?>">Kembali</a>
                    	<h3> <?= $dt_simpul->simpulNama?></h3>
                    	<div class="row">
                    		<div class="col-lg-3">
                    			<table>
                            		<!-- <tr>
                            			<td>Pusat Kebugaran</td>
                            			<td>:</td>
                            			<td><?= $dt_simpul->simpulNama?></td>
                            		</tr> -->
                            		<tr>
                            			<td>Alamat</td>
                            			<td>:</td>
                            			<td><?= $dt_simpul->simpulAlamat?></td>
                            		</tr>
                            		<tr>
                            			<td>Latitude</td>
                            			<td>:</td>
                            			<td><?= $dt_simpul->simpulLat?></td>
                            		</tr>
                            		<tr>
                            			<td>Longitude</td>
                            			<td>:</td>
                            			<td><?= $dt_simpul->simpulLng?></td>
                            		</tr>
                            	</table>
                    		</div>
                    		<div class="col-lg-9">
                    			<div id="maps" style="height: 500px;width: 100%;"></div>
                    		</div>
                    	</div>
                    	</div>
                    	</div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->
        <!-- Back to top -->    
        <a href="<?= base_url('assets/landing/')?>#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="<?= base_url('assets/landing/')?>js/jquery.min.js"></script>
        <script src="<?= base_url('assets/landing/')?>js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/landing/')?>js/jquery.easing.min.js"></script>
        <script src="<?= base_url('assets/landing/')?>js/scrollspy.min.js"></script>

        <!-- custom js -->
        <script src="<?= base_url('assets/landing/')?>js/app.js"></script>
        <script src="https://unpkg.com/@turf/turf/turf.min.js"></script>

    </body>
<script type="text/javascript">

mapboxgl.accessToken = 'pk.eyJ1IjoiZWZoYWwiLCJhIjoiY2ptOXRiZ3k2MDh4bzNrbnljMjk5Z2d5aSJ9.8dSNgeAjpdTlZ3x-b2vsog';
var map = new mapboxgl.Map({
    container: 'maps', // container id
    style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
    center: [<?= $dt_simpul->simpulLng?>,<?= $dt_simpul->simpulLat?>], // starting position [lng, lat]
    zoom: 18, // starting zoom
    logoPosition:'top-right',
});
var marker = new mapboxgl.Marker()
.setLngLat([<?= $dt_simpul->simpulLng?>,<?= $dt_simpul->simpulLat?>])
.addTo(map);
</script>
</html>