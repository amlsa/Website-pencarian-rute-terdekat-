
<?php include "../koneksi_database.php";

$id_keranjang = $_GET['id'];
$id_mobil = $_GET['id_mobil'];
			$query="UPDATE keranjang SET  status='Selesai' WHERE id_keranjang=$id_keranjang";
			$query2="UPDATE mobil SET  status_mobil='kosong' WHERE id=$id_mobil";
			
			
			$hasil=mysqli_query($con,$query);
			$hasil2=mysqli_query($con,$query2);
			if($hasil){
				if($hasil){
				header("location:pembelian.php");
				}
				
			}else {
				echo 'gagal';
			}
	?>