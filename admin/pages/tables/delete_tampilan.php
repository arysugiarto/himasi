<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/09/18
 * Time: 21:40
 */
require_once "../lib/koneksi.php";
$link = connect();
$sql =mysqli_query($link,"DELETE FROM tb_tampilan WHERE id_tampilan=('$_GET[id_tampilan]')");
if ($sql){
    header("location:data_tampilan.php");
}
else{
    header("location:data_tampilan.php");
}

?>
