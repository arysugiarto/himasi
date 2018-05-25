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

$judul_event      = $_POST['judul_event'];
$tempat_event     = $_POST['tempat_event'];
$waktu            =$_POST['waktu'];
$waktu_selesai    =$_POST['waktu2'];
$fotonya          = $_FILES['image']['name'];
$tmp              = $_FILES['image']['tmp_name'];
$tanggal          =$_POST['tanggal_event'];
$penyelanggara    =$_POST['by'];
$sifat            =$_POST['sifat'];
$tiket            =$_POST['tiket'];
$isiartikel       =$_POST['artikel_event'];

move_uploaded_file($tmp, "img/img_event/$fotonya");

$terima = "INSERT INTO tb_event (id_event,judul_event,tanggal_event,waktu,waktu_selesai,tempat_event,sifat,harga_tiket,gambar_event,penyelenggara,artikel_event) VALUES ('', '{$judul_event}','{$tanggal}','{$waktu}','$waktu_selesai', '{$tempat_event}','{$sifat}','{$tiket}','{$fotonya}','{$penyelanggara}','{$isiartikel}')";
$kirim = mysqli_query($link, $terima);
if ($kirim){
    header("location:event.php");
}
else{
    header("location:event.php");
}
?>
