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

$fotonya          = $_FILES['image']['name'];
$tmp              = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp, "../forms/img/img_event/$fotonya");

$sql =mysqli_query($link,"UPDATE tb_event SET judul_event='$_POST[judul_event]',tanggal_event='$_POST[tanggal_event]',waktu='$_POST[waktu]',waktu_selesai='$_POST[waktu2]',tempat_event='$_POST[tempat_event]',sifat='$_POST[sifat]',harga_tiket='$_POST[tiket]',gambar_event='$_POST[image]',penyelenggara='$_POST[by]',artikel_event='$_POST[artikel_event]' WHERE id_event=('$_POST[Id]')");
$kirim = mysqli_query($link, $sql);
if ($kirim){
    header("location:data_event.php");
}
else{
    header("location:data_event.php");
}
?>
