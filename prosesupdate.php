<?php
	include ('koneksi_database.php');
	//get the value from update
$nama=$_FILES["file"]["name"];
	$id=$_POST['id'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 500000)
	) {
		if (move_uploaded_file($_FILES["file"]["tmp_name"], "bukti/" . $_FILES["file"]["name"])){
			$query="UPDATE keranjang SET bukti_pembayaran='$nama', status='Menunggu konfirmasi' WHERE id_keranjang=$id";
			
			$hasil=mysqli_query($con,$query);
			if($hasil){
				header("location:keranjang.php");
				
			}

		}
		else 'gagal ditambahkan';
		
	}else {
		echo 'gambar tidak sesuai';
	}
	?>