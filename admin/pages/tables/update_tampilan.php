
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


$sql =mysqli_query($link,"UPDATE tb_tampilan SET font='$_POST[font]',univ='$_POST[univ]' WHERE id_tampilan=('$_POST[id]')");
$kirim = mysqli_query($link, $sql);
if ($kirim){
    header("location:data_tampilan.php");
}
else{
    header("location:data_tampilan.php");
}
?>
