<?php include "../koneksi_database.php";
	//get the value from form update
	$id = $_GET['id'];
	//query for delete data in database
	$query="DELETE FROM mobil where id=$id";
	$hasil=mysqli_query($con,$query);
	//see the result
	if ($hasil) {
	header("location:mobil.php");
	}else {
		echo 'gagal' ;
	}
	?>