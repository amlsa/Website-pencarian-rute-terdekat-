<?php
include 'cover/header.php';
$id= $_GET['id']; 
$query="SELECT * FROM wahana join Wahana_zone WHERE wahana.id=$id and Wahana_zone.id=wahana.Wahana_zone";
	$hasil=mysqli_query($con,$query);
?>
  <!-- Page Content -->
  <div class="container"  style="background-color:white;">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
	
	<?php while ($baris=mysqli_fetch_array($hasil)) { ?>
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="mobil/<?php echo $baris['gambar'] ?>" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light"><?php echo $baris['Nama_wahana']?></h1>
        <p><i class="fas fa-grip-horizontal" style="color: #9620da;"></i> Wahana Zone	=<?php echo $baris['Wahana_zone']?></p>
		<p><i class="fas fa-user" style="color: #9620da;"></i> Kapasitas =<?php echo $baris['kapasitas']?> orang</p>
		<p><i class="fas fa-stopwatch" style="color: #9620da;"></i> Durasi = <?php echo $baris['Durasi']?> menit</p>
        <p><i class="fas fa-address-card" style="color: #9620da;"></i> Usia = <?php echo $baris['Usia']?> </p>
		<p><i class="" style="color: #9620da;"></i> Keterangan = <?php echo $baris['Keterangan']?> </p>
     </div>
	  
	  <?php } ?>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->


  <?php
include "cover/footer.php";
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>