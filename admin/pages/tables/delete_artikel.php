<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/09/18
 * Time: 21:40
 */
require_once "../lib/koneksi.php";
$link = connect();
$sql =mysqli_query($link,"DELETE FROM tb_artikel WHERE id_artikel=('$_GET[id_artikel]')");
if ($sql){
    header("location:data.php");
}
else{
    header("location:data.php");
}
?>

