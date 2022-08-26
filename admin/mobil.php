<?php
include "cover/header.php";
$query="SELECT * FROM mobil join merk WHERE merk.id=mobil.merk";
$hasil=mysqli_query($con,$query);
?>
    
	<div id="content-wrapper">

      <div class="container-fluid">
	  

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Daftar Mobil</li>
        </ol>

        <!-- Icon Cards-->
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
	  <th scope="col">ID</th>
      <th scope="col">Merk</th>
      <th scope="col">Type</th>
      <th scope="col">Jumlah Kursi</th>
	  <th scope="col">Harga Sewa</th>
	  <th scope="col">Gambar</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
$i=1; 
 while ($baris=mysqli_fetch_array($hasil)) { ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?php echo $baris['id']?></td>
	  <td><?php echo $baris['nama_merk']?></td>
	  <td><?php echo $baris['Type']?></td>
	  <td><?php echo $baris['Jumlah_kursi']?></td>
	  <td><?php echo $baris['Harga_Sewa']?></td>
	  <td><img src="../mobil/<?php echo $baris['gambar']?>" class="rounded mx-auto d-block col-md-5" alt="..."></td>
	  <td><a href="prosesdelete_mobil.php?id=<?php echo $baris['id']?>" <button type="button" class="btn btn-outline-danger">Delete</button></a>
	  </td>
    </tr>
 <?php } ?>
  </tbody>
</table>
      

      </div>
      <!-- /.container-fluid -->
<?php
include "cover/footer.php";
?>

     