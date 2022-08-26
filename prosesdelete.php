<?php
	include ('koneksi_database.php');
	//get the value from form update
	$id_keranjang = $_GET['id'];
	//query for delete data in database
	$query="DELETE FROM keranjang where id_keranjang=$id_keranjang";
	$hasil=mysqli_query($con,$query);
	//see the result
	if ($hasil) {
	header("location:keranjang.php");
	}else {
		echo 'gagal' ;
	}
	?>