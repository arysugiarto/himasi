<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/09/18
 * Time: 21:40
 */
require_once "../lib/koneksi.php";
$link = connect();
$sql =mysqli_query($link,"DELETE FROM tb_event WHERE id_event=('$_GET[id_event]')");
if ($sql){
    header("location:data_event.php");
}
else{
    header("location:data_event.php");
}

?>

