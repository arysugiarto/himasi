<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/07/18
 * Time: 05:58
 */


session_start();

require_once '../lib/koneksi.php';
$link=connect();

$caption =$_POST['caption'];
$fotonya    = $_FILES['image']['name'];
$tmp        = $_FILES['image']['tmp_name'];



move_uploaded_file($tmp, "img/img_galeri/$fotonya");

$terima = "INSERT INTO tb_galeri (id_galeri,gambar_galeri,caption) VALUES ('','{$fotonya}','$caption')";
$kirim = mysqli_query($link, $terima);
if ($kirim){
    header("location:galeri.php");
}
else{
    header("location:galeri.php");
}
?>