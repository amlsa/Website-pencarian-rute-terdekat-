 
<?php include "koneksi_database.php";
 session_start();
$username=$_SESSION ['username'];
$tanggal_pembelian=$_POST['Tanggal_pembelian'];
$harga_sewa=$_POST['harga_sewa'];
$JumlahHari=$_POST['jumlah_hari'];
$total_bayar=$_POST['total_bayar'];
//var_dump($username, $id_mobil , $tanggal_pengambilan , $harga_sewa , $total_bayar );
//die;
$query="INSERT INTO keranjang (username,Status,Jumlah_hari,Tanggal_pembelian,Total_bayar) values('$username','Belum dibayar',$JumlahHari,'$tanggal_pembelian',$total_bayar)";
$hasil=mysqli_query($con,$query);
if ($hasil ){
//benar
header("location:keranjang.php");

}else{
//salah
header("location:booking.php");

}
 ?>