<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "db_himasi";

function connect()
{
    $link = mysqli_connect('localhost','root','','db_himasi');
    return $link;
}
?>