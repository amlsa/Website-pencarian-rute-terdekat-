<?php
	include ('koneksi_database.php');
	$first=$_POST['firstName'];
	$last=$_POST['lastName'];
	
	//get the value from update
$nama=$_FILES["file"]["name"];
	//var_dump($first,$last,$nama);
	//die;
	$id=$_POST['id_user'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 500000)
	) {
		if (move_uploaded_file($_FILES["file"]["tmp_name"], "profil/" . $_FILES["file"]["name"])){
			$query="UPDATE user SET foto_profil='$nama',First_Name='$first',Last_Name='$last' WHERE id_user=$id";
			
			$hasil=mysqli_query($con,$query);
			if($hasil){
				header("location:profil.php");
				
			}

		}
		else 'gagal ditambahkan';
		
	}else {
		echo 'gambar tidak sesuai';
	}
	?>