<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/16
 * Time: 下午2:14
 */

session_start();

$_SESSION["user"]=$_POST["user"];
$_SESSION["pwd"]=$_POST["pwd"];

if ($_SESSION['user']="") {
    echo "empty";
    echo "<script language='javascript'>alert('请通过正确的途径登录本系统!');history.back()</script>";
}