<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/09/18
 * Time: 21:40
 */
require_once "../lib/koneksi.php";
$link = connect();
$sql =mysqli_query($link,"DELETE FROM tb_kesan WHERE id_kesan=('$_GET[id_kesan]')");
if ($sql){
    header("location:data_kesan.php");
}
else{
    header("location:data_kesan.php");
}

?>

