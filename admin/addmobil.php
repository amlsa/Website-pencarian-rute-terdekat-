<?php
include "cover/header.php";
$query="SELECT * FROM merk";
$hasil=mysqli_query($con,$query);
?>
    
	<div id="content-wrapper">

      <div class="container-fluid">
	  

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tambah Stok Mobil</li>
        </ol>

        <!-- Icon Cards-->
		<form action="prosesupdate.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
	<label for="inputState">Merk</label>
      <select id="inputState" class="form-control" name="merk">
	   <?php while ($baris=mysqli_fetch_array($hasil)) { ?>
        <option value="<?= $baris['id'] ?>"><?= $baris['nama_merk'] ?></option>
	   <?php } ?>
        
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Type</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Jumlah kursi</label>
    <input type="text" class="form-control" id="jumlah_kursi" name="jumlah_kursi">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Harga Sewa</label>
    <input type="text" class="form-control" id="harga_sewa" name="harga_sewa">
  </div>
  <div class="form-row">
<div class="form-group">
    <label for="exampleFormControlFile1">Upload gambar</label>
    <input type="file" class="form-control-file" id="upload" name="file">
  </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Selesai</button>
</form>
      

      </div>
      <!-- /.container-fluid -->
<?php
include "cover/footer.php";
?>

     