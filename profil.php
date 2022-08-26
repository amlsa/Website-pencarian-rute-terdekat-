<?php
include "cover/header.php";
include "koneksi_database.php";
$username=$_SESSION["username"];
$query="SELECT * FROM user where Username='$username' ";
	$hasil=mysqli_query($con,$query);
?>
  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
		<?php while ($baris=mysqli_fetch_array($hasil)) { ?>

    <div class="row align-items-center my-5">
	<div class="card" style="width: 18rem;">
  <img src="profil/<?= $baris['foto_profil']?>" class="card-img">
  <div class="card-body">
    <p class="card-text">First name: <?= $baris['First_Name']?></p>
	<p class="card-text">Last name: <?= $baris['Last_Name']?></p>
	<p class="card-text">Email: <?= $baris['Email']?></p>
	<p class="card-text">Username: <?= $baris['Username']?></p>
  </div>
</div>
	<br>
	
	
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
	</div>
	 <div class="container">
<a href="logout.php"> <button>logout</button></a>
<a href="update_user.php?id=<?= $baris['id_user']?>" > <button>Update</button></a>
</div>
	<?php } ?>

  <?php
include "cover/footer.php";
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
