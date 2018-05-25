<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 5/22/2017
 * Time: 09:05 AM
 */
$host="Localhost";
$user="root";
$pass="";
$name="bukutamu";

function connect()
{
    $_link=mysqli_connect('localhost','root','','bukutamu');
    return $_link;
}
?>
