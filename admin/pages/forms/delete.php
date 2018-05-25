<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 1/8/2017
 * Time: 20:55 PM
 */
require_once "../lib/koneksi.php";
$_link=connect();

$sql =mysqli_query( $_link,"DELETE FROM post WHERE Id=('$_GET[Id]')");
if ($sql){
    header("location:data_post.php");
}
else{
    header("location:data_post.php");
}

?>