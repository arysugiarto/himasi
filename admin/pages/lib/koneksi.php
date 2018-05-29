<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "db_man3sukabumi";

function connect()
{
    $link = mysqli_connect('localhost','root','','db_man3sukabumi');
    return $link;
}
?>