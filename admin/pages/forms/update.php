<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 5/29/2017
 * Time: 21:54 PM
 */
require_once "../lib/koneksi.php";
$_link=connect();
$caption =$_POST['caption'];
$fotonya    = $_FILES['image']['name'];
$tmp        = $_FILES['image']['tmp_name'];



move_uploaded_file($tmp, "img/img_galeri/$fotonya");


$sql =mysqli_query( $_link,"UPDATE post SET Id='$_POST[Id]',Judul='$_POST[judul]',Editor='$_POST[editor]'  WHERE  Id='$_POST[Id]' ");
if ($sql){
    header("location:editors.php");
}
else{
    header("location:editors.php");
}
?>
