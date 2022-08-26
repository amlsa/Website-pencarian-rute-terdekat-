<?php
error_reporting(0);
include "cover/header.php";
$query="SELECT * FROM wahana_zone";
	$hasil=mysqli_query($con,$query);
?>



  <!-- Header -->
  <header class="masthead bg-dark text-white text-center">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
		<img class="img-fluid mb-5 d-block mx-auto" src="img/jatimpark.png" alt="">
          <h1 class="display-25 text-white mt-3 mb-2">Wisata Jawa Timur Park 1</h1>
		  <hr class="star-light">
          <p class="lead mb-5 text-white">Selamat di Website JatimPark 1</p>
		  <p class="lead mb-5 text-white">Objek wisata Jatim Park 1 Batu Malang merupakan pionir atau barometer wisata-wisata modern di Malang. Ya didirikan diatas lahan seluas 22 hektar dan hanya berjarak 5 kilometer saja dari pusat kota Batu. </p>
        </div>
      </div>
    </div>
  </header>
  

  <!-- Page Content -->
  <div class="container" style="background-color:white;">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>Kenapa memilih JatimPark 1 ?</h2>
        <hr>
        <p>Jatim Park 1 dirancang sebagai sebuah taman bermain modern. Tempat wisata ini bisa jadi tempat melepas penat dengan lebih dari 50 wahana seru untuk berbagai kalangan usia. Beberapa wahana yang ada di sini di antaranya Spinning Coaster, 360° Pendulum, Aero Test, dan Flying Tornado. Keempatnya sangat cocok untuk menantang adrenalin kamu.</p>
        <p>Selain untuk rekreasi, Jatim Park 1 juga menawarkan wahana untuk belajar seperti Galeri Etnik Nusantara, Science Center, dan Rumah Adat Madura. Favorit wisatawan di sini yaitu Museum Tubuh yang membantu anak-anak untuk memahami fungsi dan bentuk organ tubuh manusia. Museum ini pun memiliki 16 zona untuk dijelajahi, mulai dari zona gigi, telinga, hidung, pembuluh darah, jantung, hati, dan masih banyak lainnya.</p>
        <a class="btn btn-secondary btn-lg btn-block" href="pesan.php">Click to buy a ticket&raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong></strong>
          <br>Jl. Kartika No.2, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65315
          <br>Indonesia
          <br>
        </address>
        <address>
          <abbr title="Phone">Phone:</abbr>
          (123) 456-7890
          <br>
          <abbr title="Email">E-mail:</abbr>
          <a href="mailto:#">jatimpark@gmail.com</a>
        </address>
      </div>
    </div>
    <!-- /.row -->
<div class="row">
  <div class="col-sm-6">
   <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="wahanaa.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">37 WAHANA SERU </h5>
        <p class="card-text"> Jatim Park 1 memiliki banyak sekali wahana permainan dan tempat tempat seru lainya sehingga pengunjung tidak akan bosan dengan tempat wisata yang begitu-begitu saja.
        </p>
 
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="col-sm-6">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="jatim.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">ICON WISATA JAWA TIMUR</h5>
        <p class="card-text">Jawa Timur Park merupakan tempat wisata yang menjadi icon wisata jawa timur</p>
       
      </div>
    </div>
  </div>
</div>
	
</div>

  </div>
  
  <div class="row">
  <div class="col-sm-6">
   <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="harga.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">HARGA TIKET MURAH</h5>
        <p class="card-text">Harga tiket di Jawa Timur Park 1 relatif murah dibandingkan dengan wisata sejenis lainnya yaitu Rp.70.000 sampai dengan Rp. 100.000</p>
 
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="col-sm-6">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="lokasi.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">LOKASI STRATEGIS </h5>
        <p class="card-text">Jawa Timur Park 1 memiliki lokasi yang sangat strategis dimana dapat dijangkau oleh transportasi umum, roda dua maupun roda 4.</p>
       
      </div>
    </div>
  </div>
</div>
	
</div>

  </div>
  
  <div class="row">
  <?php while ($baris=mysqli_fetch_array($hasil)) { ?>
  	 <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo $baris['gambar_kategori'] ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $baris ['nama_merk']?></h4>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="wahana.php?id=<?php echo $baris ['id']?>" class="btn btn-secondary btn-lg btn-block">More Info</a>
          </div>
        </div>
      </div>
  <?php } ?>


  
  </div>
  <?php
include "cover/footer.php";
?>

  
