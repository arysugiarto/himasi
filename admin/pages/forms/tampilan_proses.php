<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/07/18
 * Time: 06:05
 */


session_start();

require_once '../lib/koneksi.php';
$link=connect();

$font       = $_POST['font'];
$univ       = $_POST['univ'];

//move_uploaded_file($tmp, "img/$fotonya");

$terima = "INSERT INTO tb_tampilan (id_tampilan,font,univ) VALUES ('', '{$font}','{$univ}')";
$kirim = mysqli_query($link, $terima);
if ($kirim){
    header("location:tampilan.php");
}
else{
    header("location:tampilan.php");
}
?>
