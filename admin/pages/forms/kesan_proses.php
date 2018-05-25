<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/07/18
 * Time: 05:48
 */

session_start();

require_once '../lib/koneksi.php';
$link=connect();

$nama       = $_POST['nama'];
//$fotonya    = $_FILES['image']['name'];
//$tmp        = $_FILES['image']['tmp_name'];
$jabatan    =$_POST['jabatan'];
$kesan      =$_POST['kesan'];

//move_uploaded_file($tmp, "img/$fotonya");

$terima = "INSERT INTO tb_kesan (id_kesan,nama,jabatan,kesan) VALUES ('', '{$nama}','{$jabatan}', '{$kesan}')";
$kirim = mysqli_query($link, $terima);
if ($kirim){
    header("location:form_kesan.php");
}
else{
    header("location:form_kesan.php");
}
?>