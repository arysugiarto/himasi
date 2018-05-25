<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/07/18
 * Time: 05:30
 */

session_start();

require_once '../lib/koneksi.php';
$link=connect();


$sql =mysqli_query($link,"UPDATE tb_kesan SET nama='$_POST[nama]',jabatan='$_POST[jabatan]',kesan='$_POST[kesan]' WHERE id_kesan=('$_POST[id]')");
$kirim = mysqli_query($link, $sql);
if ($kirim){
    header("location:data_kesan.php");
}
else{
    header("location:data_kesan.php");
}
?>
