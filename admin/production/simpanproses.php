<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 06/20/17
 * Time: 22:30
 */

session_start();

require_once "koneksi.php";
$link=connect();


$sql= mysqli_query ($link,"INSERT INTO tamu VALUES ('','$_POST[nama]','$_POST[alamat]','$_POST[notelp]','$_POST[email]','$_POST[tgl]','$_POST[pesan]')");
if ($sql){
    header("location:index.html");
}
else{
    header("location:index.html");
}
?>