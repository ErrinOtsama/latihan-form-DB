<?php
include ('koneksi.php');

$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];

$query= "UPDATE tb_pengurus SET nama='$nama', alamat='$alamat', gender='$gender', gaji='$gaji' WHERE id='$id' ";
$ubah= mysqli_query($conn,$query);

header('location: tampil_data.php')

?>