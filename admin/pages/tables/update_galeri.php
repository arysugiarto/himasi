<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 5/29/2017
 * Time: 21:54 PM
 */
require_once "../lib/koneksi.php";
$_link=connect();
$caption   =$_POST['caption'];
$fotonya    = $_FILES['image']['name'];
$tmp        = $_FILES['image']['tmp_name'];



move_uploaded_file($tmp, "../forms/img/img_galeri/$fotonya");


$sql =mysqli_query($_link,"UPDATE tb_galeri SET gambar_galeri='$fotonya',caption='$_POST[caption]'  WHERE  id_galeri=('$_POST[id]')");
$kirim = mysqli_query($link, $sql);
if ($sql){
    header("location:data_galeri.php");
}
else{
    header("location:data_galeri.php");
}
?>
