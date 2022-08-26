<?php
include "cover/header.php";
$query="SELECT * FROM tb_graf";
$hasil=mysqli_query($con,$query);
?>
    
	<div id="content-wrapper">

      <div class="container-fluid">
	  

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Graf</li>
        </ol>

        <!-- Icon Cards-->
		<table class="table table-striped">
  <thead>
    <tr>
	  <th scope="col">No</th>
	  <th scope="col">Graph Id</th>
      <th scope="col">Simpul Mulai</th>
	  <th scope="col">Simpul Akhir</th>
      <th scope="col">Jarak</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
$i=1; 
 while ($baris=mysqli_fetch_array($hasil)) { ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?php echo $baris['graphID']?></td></td>
	  <td><?php echo $baris['simpulMulai']?></td></td>
	  <td><?php echo $baris['simpulAkhir']?></td></td>
	  <td><?php echo $baris['jarak']?></td></td>
    </tr>
 <?php } ?>
  </tbody>
</table>
      

      </div>
      <!-- /.container-fluid -->
<?php
include "cover/footer.php";
?>