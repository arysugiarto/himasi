<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 4/7/2017
 * Time: 10:12 AM
 */
session_start();
unset($_SESSION['username']);

session_destroy();
header("Location:index.php")
?>