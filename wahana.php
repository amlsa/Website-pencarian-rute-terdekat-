<?php
error_reporting(0);
include "cover/header.php";
$query="SELECT * FROM wahana";
	$hasil=mysqli_query($con,$query);
?>


  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <div id="carouselExampleIndicators" class="carousel slide h-200" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slider1.jpg" class="d-block w-100 h-200" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider2.jpg" class="d-block w-100 h-200" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider3.jpg" class="d-block w-100 h-200" alt="...">
    </div>
	<div class="carousel-item">
      <img src="slider4.jpg" class="d-block w-100 h-200" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Page Features -->
    <div class="row text-center">
	<?php while ($baris=mysqli_fetch_array($hasil)) { ?>
	 <div class="col-lg-2 col-md-6 h-75">
        <div class="card h-75">
          <img class="card-img-top" src="mobil/<?php echo $baris['gambar'] ?>" height=150 alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $baris['Nama_wahana']?></h4>
          </div>
          <div class="card-footer">
            <a href="rincian.php?id=<?php echo $baris['id'] ?> " class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
	<?php } ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php
include "cover/footer.php";
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
