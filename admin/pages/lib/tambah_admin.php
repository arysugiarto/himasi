<?php
session_start();
require_once 'koneksi.php';
$link=connect();

$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

$insert = "INSERT INTO tb_admin(id_admin,Nama,Username,Password,level) values('','$nama','$username','$password','2')";
$kirim = mysqli_query($link, $insert);
if ($kirim){
    header("location:index.php");
}
else{
    header("location:index.php");
}
?>