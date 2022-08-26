<?php
	include ('../koneksi_database.php');
	//get the value from update
$nama=$_FILES["file"]["name"];
	$merk=$_POST['merk'];
	$type=$_POST['type'];
	$jumlah_kursi=$_POST['jumlah_kursi'];
	$harga_sewa=$_POST['harga_sewa'];
	
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 500000)
	) {
		if (move_uploaded_file($_FILES["file"]["tmp_name"], "../mobil/" . $_FILES["file"]["name"])){
		$query="INSERT into mobil (Merk,Type,Jumlah_kursi,Harga_Sewa,gambar) values($merk,'$type',$jumlah_kursi,$harga_sewa,'$nama')";
			
			$hasil=mysqli_query($con,$query);
			if($hasil){
				header("location:mobil.php");
				
			}

		}
		else {'gagal ditambahkan';
		}
		
	}else {
		echo 'gambar tidak sesuai';
	}
	?>