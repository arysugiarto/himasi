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
$kategori_pendidikan=$_POST['pendidikan'];
$kategori_berita    =$_POST['berita'];
$fotonya    = $_FILES['image']['name'];
$tmp        = $_FILES['image']['tmp_name'];
$isiartikel =$_POST['artikel'];
date_default_timezone_set('Asia/Jakarta');
$tanggal =   $_POST["tanggal"]= date("Y-m-d H:i:s");

move_uploaded_file($tmp, "img/img_artikel/$fotonya");

$terima = "INSERT INTO tb_artikel (id_artikel,judul_artikel,kategori,kategori_2,gambar_artikel,tanggal,isi_artikel) VALUES ('', '{$judul}','{$kategori_pendidikan}','{$kategori_berita}', '{$fotonya}','{$tanggal}','{$isiartikel}')";
$kirim = mysqli_query($link, $terima);
if ($kirim){
    header("location:editors.php");
}
else{
    header("location:editors.php");
}
?>
