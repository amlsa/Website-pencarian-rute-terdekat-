<?php
include "cover/header.php";
$query="SELECT * FROM wahana join wahana_zone WHERE wahana_zone.id=wahana.wahana_zone";
$hasil=mysqli_query($con,$query);
?>
    
	<div id="content-wrapper">

      <div class="container-fluid">
	  

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Daftar Wahana</li>
        </ol>

        <!-- Icon Cards-->
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
	  <th scope="col">ID</th>
      <th scope="col">Wahana zone</th>
      <th scope="col">Nama wahana</th>
      <th scope="col">Kapasitas</th>
	  <th scope="col">Durasi</th>
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
	  <td><?php echo $baris['Wahana_zone']?></td>
	  <td><?php echo $baris['Nama_wahana']?></td>
	  <td><?php echo $baris['kapasitas']?></td>
	  <td><?php echo $baris['Durasi']?></td>
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

     