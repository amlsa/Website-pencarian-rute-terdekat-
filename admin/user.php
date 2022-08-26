<?php
include "cover/header.php";
$query="SELECT * FROM user";
$hasil=mysqli_query($con,$query);
?>
    
	<div id="content-wrapper">

      <div class="container-fluid">
	  

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data User</li>
        </ol>

        <!-- Icon Cards-->
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
	  <th scope="col">Id User</th>
      <th scope="col">Username</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
  <?php
$i=1; 
 while ($baris=mysqli_fetch_array($hasil)) { ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?php echo $baris['id_user']?></td></td>
	  <td><?php echo $baris['Username']?></td></td>
	  <td><?php echo $baris['Role']?></td></td>
    </tr>
 <?php } ?>
  </tbody>
</table>
      

      </div>
      <!-- /.container-fluid -->
<?php
include "cover/footer.php";
?>

     