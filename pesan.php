<?php
error_reporting(0);
include "cover/header.php";
$query="SELECT * FROM tiket";
	$hasil=mysqli_query($con,$query);
?>

  <!-- Page Content -->
  <div class="container text-white">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
	<?php while ($baris=mysqli_fetch_array($hasil)) { ?>
	<form action="prosespesan.php" method="POST">
  <div class="form-row">
  </div>
  <div class="form-group">
    <label for="inputAddress">Tanggal kunjungan</label>
    <input type="date" class="form-control" id="TanggalPembelian" placeholder="" name="tanggal_pembelian">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Jumlah Orang</label>
      <input type="text" class="form-control" id="JumlahHari" name="jumlah_hari" onkeyup="sum();">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Harga Tiket</label>
      <input type="text"  id="HargaTiket" class="form-control" value="<?= $baris['Harga_tiket']?>" name="harga_tiket">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Total Bayar</label>
      <input type="text" class="form-control" id="TotalBayar" name="total_bayar">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
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
<script> 
function sum(){
	var txtFirstNumberValue = document.getElementById("JumlahHari").value;
	var txtSecondNumberValue = document.getElementById("HargaTiket").value;
	var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
	
		document.getElementById("TotalBayar").value = result;
}
</script>