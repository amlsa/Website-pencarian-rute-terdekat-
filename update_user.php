<?php
include "cover/header.php";
include "koneksi_database.php";
$id= $_GET['id'];
$username=$_SESSION["username"];
$query="SELECT * FROM user WHERE id_user='$id'";
	$hasil=mysqli_query($con,$query);
?>
  <!-- Page Content -->
    <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
	  <?php while ($baris=mysqli_fetch_array($hasil)) { ?>
        <form action="prosesupdate_user.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus" id="firstName" name="firstName" value="<?= $baris['First_Name']?>">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required" id="lastName" name="lastName"value="<?= $baris['Last_Name']?>">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" id="email" name="email" value="<?= $baris['Email']?>"disabled>
              <label for="inputEmail">Email address</label>
            </div>
          </div>
		    <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" class="form-control" placeholder="Username" required="required" id="username" name="username"value="<?= $baris['Username']?>"disabled>
				    <input type="text" class="form-control" placeholder="id_user" required="required" id="username" name="id_user"value="<?= $baris['id_user']?>"hidden>
                  <label for="username">Username</label>
                </div>
              </div>
            </div>
          </div>
		  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Foto</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
  </div>
         
          <input type="submit" class="btn btn-primary btn-block" value="register">
        </form>
	  <?php } ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <?php
include "cover/footer.php";
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
