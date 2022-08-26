<?php
include "cover/header.php";
$query="SELECT * FROM tb_simpul";
$hasil=mysqli_query($con,$query);
?>
    
	<div id="content-wrapper">

      <div class="container-fluid">
	  

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Lokasi Wahana</li>
        </ol>

        <!-- Icon Cards-->
		<table class="table table-striped">
  <thead>
    <tr>
	<th scope="col">Simpul id</th>
	  <th scope="col">Simpul Nama</th>
      <th scope="col">Nama Wahana </th>
	  <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
$i=1; 
 while ($baris=mysqli_fetch_array($hasil)) { ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?php echo $baris['simpulNama']?></td></td>
	  <td><?php echo $baris['nama_wahana']?></td></td>
	  <td><?php echo $baris['simpulLat']?></td></td>
	  <td><?php echo $baris['simpulLng']?></td></td>
    </tr>
 <?php } ?>
  </tbody>
</table>
      

      </div>
      <!-- /.container-fluid -->
<?php
include "cover/footer.php";
?>