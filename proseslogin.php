<?php include "koneksi_database.php" ;

$username=$_POST['username'];
$pass=$_POST['password'];

$sql="SELECT * FROM user WHERE username='$username' and password='$pass'";
$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);
$hasil=mysqli_fetch_array($result);
session_start();

if($count==1){
	if($hasil['Role']=='admin'){
		 $_SESSION["Role"] = $hasil['Role'];
		 $_SESSION["username"] = $username;
    header("location:admin/index.php");
	}
	if($hasil['Role']=='petugas'){
	
	$_SESSION["Role"] = $hasil['Role'];
		 $_SESSION["username"] = $username;
    header("location:index.php");
	}
if($hasil['Role']=='user'){
	
	$_SESSION["Role"] = $hasil['Role'];
		 $_SESSION["username"] = $username;
    header("location:index_pengunjung.php");
}
}
else{
    echo "Account anda belum terdaftar di web kami";
}
?>