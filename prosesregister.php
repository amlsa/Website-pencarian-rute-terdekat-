 
<?php include "koneksi_database.php";
 session_start();
$firstName=$_POST['firstName'];
$lastName=$_POST ['lastName'];
$username=$_POST ['username'];
$email=$_POST['email'];
$password=$_POST['password'];
//var_dump($firstName, $lastName , $username , $email , $password );
//die;
echo $query="INSERT INTO user (First_Name,Last_Name,username,email,password,role) values('$firstName','$lastName','$username','$email','$password','user')";
$hasil=mysqli_query($con,$query);
if ($hasil ){
//benar
header ("location:login.php");

}else{
//salah
header ("location:register.php");

}
 ?>