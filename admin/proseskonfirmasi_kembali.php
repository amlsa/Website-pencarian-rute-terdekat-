
<?php include "../koneksi_database.php";

$id_mobil = $_GET['id_mobil'];
			$query2="UPDATE mobil SET  status_mobil='Tersedia' WHERE id=$id_mobil";
			
			$hasil2=mysqli_query($con,$query2);
				if($hasil2){
				header("location:pembelian.php");
				}
				
			else {
				echo 'gagal';
			}
	?>