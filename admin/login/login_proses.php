<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 06/21/17
 * Time: 10:35
 */
session_start();
require_once "../pages/lib/koneksi.php";
$_link = connect();

$sql=mysqli_query($_link,"SELECT * FROM tb_admin WHERE Username='$_POST[username]' AND Password='$_POST[password]'");
if (mysqli_num_rows($sql) !=0){
    $tampil=mysqli_fetch_array($sql);
    $_SESSION['nama']=$tampil['Nama'];
    $_SESSION['id_admin']=$tampil['id_admin'];
    $_SESSION['username']=$_POST['username'];
    $_SESSION['Username']=$tampil[1];
    echo " <script>
        window.location.href='../index.php';
        </script>";
}else{
    echo "<script>
        window.location.href='index.html';
        </script>";
}
?>