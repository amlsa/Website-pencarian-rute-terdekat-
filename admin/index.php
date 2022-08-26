<?php
include "cover/header.php";
$query="SELECT * FROM mobil";
$hasil=mysqli_query($con,$query);
?>
    
	<div id="content-wrapper">

      <div class="container-fluid">
	  

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>


      </div>
      <!-- /.container-fluid -->
<?php
include "cover/footer.php";
?>

     