<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 06/21/17
 * Time: 10:35
 */
session_start();
require_once "koneksi.php";
$_link = connect();

$sql=mysqli_query($_link,"SELECT * FROM daftar WHERE Username='$_POST[username]' AND Password='$_POST[password]'");
if (mysqli_num_rows($sql) !=0){
    $tampil=mysqli_fetch_array($sql);
    $_SESSION['username']=$_POST['username'];
    $_SESSION['Nama']=$tampil[4];
    echo " <script>
        window.location.href='dashboard.php';
        </script>";
}else{
    echo "<script>
        window.location.href='login.html';
        </script>";
}
?>
