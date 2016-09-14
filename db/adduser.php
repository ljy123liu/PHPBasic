<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/11/16
 * Time: 9:33 PM
 */

if (!isset($_GET['name'])){
    die('user name not define');
}

if (!isset($_GET['age'])){
    die('user age not define');
}

$name = $_GET['name'];
if (empty($name)){
    die('user name is empty');
}
$age = $_GET['age'];
if (empty($age)){
    die('user age is empty');
}

require_once 'functions.php';
connectDB();

$age = intval($age);

mysql_query("INSERT INTO users(name,age) VALUE ('$name',$age)");

if (mysql_errno()){
    echo  mysql_error();
}else {
    header("Location:allusers.php");
}
