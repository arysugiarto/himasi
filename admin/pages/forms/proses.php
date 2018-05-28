<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 4/7/2017
 * Time: 10:35 AM
 */
session_start();

require_once '../lib/koneksi.php';
$link=connect();

//$post     = $_POST['editor'];
$judul      = $_POST['judul'];
//$kategori   = $_POST['kategori'];
$kategori   = $_POST['kategori'];
$fotonya    = $_FILES['image']['name'];
$tmp        = $_FILES['image']['tmp_name'];
$isiartikel = $_POST['artikel'];
$admin      = $_SESSION['id_admin'];
date_default_timezone_set('Asia/Jakarta');
$tanggal =   $_POST["tanggal"]= date("Y-m-d H:i:s");

move_uploaded_file($tmp, "img/img_artikel/$fotonya");

$terima = "INSERT INTO tb_artikel (id_artikel,judul_artikel,kategori,gambar_artikel,tanggal,isi_artikel,id_admin) VALUES ('','$judul','$kategori','$fotonya','$tanggal','$isiartikel','$admin')";
$kirim = mysqli_query($link, $terima);
if ($kirim){
    header("location:editors.php");
}
else{
    header("location:editors.php");
}
?>
