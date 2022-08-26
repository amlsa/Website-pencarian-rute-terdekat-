<?php

include 'koneksi.php';
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT * FROM login WHERE email='$email' and password='$pass'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
$hasil=mysql_fetch_array($result);

if($count==1){
    session_start();
    
    $_SESSION["name"] = $hasil[2];
    $_SESSION["email"] = $email;
    header("location:makanan.php");
}
else{
    echo "Account anda belum terdaftar di web kami";
}
?>