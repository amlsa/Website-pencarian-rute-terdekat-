<?php
include "cover/header.php";
$query="SELECT * FROM tiket";
	$hasil=mysqli_query($con,$query);
?>


  <!-- Page Content -->
  <div class="container text-white">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
	<?php while ($baris=mysqli_fetch_array($hasil)) { ?>
	<form action="prosesupdate.php" method="POST" enctype="multipart/form-data">
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Type</label>
      <input type="text" class="form-control" id="inputType4" value="<?= $baris['Type']?>" name="type" disabled>
	  <input type="text" class="form-control" id="inputType4" value="<?= $baris['id']?>"  name="id" hidden>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Bukti Pembayaran</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
  </div>
 
  <button type="submit" class="btn btn-primary">Check Out</button>
</form>
	<?php } ?>
	
  </tbody>
</table>
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
