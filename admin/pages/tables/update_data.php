<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 5/29/2017
 * Time: 21:54 PM
 */
require_once "../lib/koneksi.php";
$_link=connect();

$sql =mysqli_query($_link,"UPDATE tb_artikel SET id_artikel='$_POST[id_artikel]',judul_artikel='$_POST[judul]',gambar_artikel='$_POST[image]',kategori='$_POST[kategori]',isi_artikel='$_POST[artikel]',  WHERE  id_artikel='$_POST[id_artikel]' ");
if ($sql){
    header("location:data.php");
}
else{
    header("location:data.php");
}
?>