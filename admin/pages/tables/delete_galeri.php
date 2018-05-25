<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/09/18
 * Time: 21:40
 */
require_once "../lib/koneksi.php";
$link = connect();
$sql =mysqli_query($link,"DELETE FROM tb_galeri WHERE id_galeri=('$_GET[id_galeri]')");
if ($sql){
    header("location:data_galeri.php");
}
else{
    header("location:data_galeri.php");
}

?>

