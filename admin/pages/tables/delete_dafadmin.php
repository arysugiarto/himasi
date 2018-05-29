<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/09/18
 * Time: 21:40
 */
require_once "../lib/koneksi.php";
$link = connect();
$sql =mysqli_query($link,"DELETE FROM tb_admin WHERE id_admin=('$_GET[id_admin]')");
if ($sql){
    header("location:daftar_admin.php");
}
else{
    header("location:daftar_admin.php");
}

?>

