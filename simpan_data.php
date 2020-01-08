<?php
include ('koneksi.php');

$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];

$query= "INSERT INTO tb_pengurus VALUES ('$id','$nama','$alamat','$gender','$gaji')";
$simpan= mysqli_query($conn,$query);

header('location: tampil_data.php')

?>