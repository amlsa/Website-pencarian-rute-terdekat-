<?php
include("koneksi_database.php");
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 500000)
	) {
	if ($_FILES["file"]["error"] > 0) {
	echo "Return Code: " . $_FILES["file"]["error"]. "<br>";
} else {
	echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	echo "Type: " . $_FILES["file"]["type"] . "<br>";
	echo "Size: " . ($_FILES["file"]["size"] / 1024) . "<br>";
	echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
	
	if (file_exists("file-photo/" . $_FILES["file"]["name"])) {
		echo $_FILES["file"]["name"] . " already exists. ";
	} else {
		move_uploaded_file($_FILES["file"]["tmp_name"], "file-photo/" . $_FILES["file"]["name"]);
		echo "Stored in: " . "file-photo/" . $_FILES["file"]["name"];
		}
	}
$nama=$_POST["nama"];
$foto=$_FILES["file"]["name"];
$query="INSERT into biodata values ('','$nama','$foto')";
$hasil=mysqli_query($con,$query);
echo "<br>";
echo "File berhasil disimpan";

} else {
	echo "Invalid file";
}
mysqli_close($con);
include ('view_anggota.php');
?>