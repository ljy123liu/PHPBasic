<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/14/16
 * Time: 11:36 PM
 */
require_once 'functions.php';
if (empty($_GET['id'])){
    die('id is empty');
}
if (empty($_GET['name'])){
    die('name is empty');
}

if (empty($_GET['age'])){
    die('age is empty');
}
$id = intval($_GET['id']);
$name = $_GET['name'];
$age = intval($_GET['age']);
connectDB();
mysql_query("UPDATE users SET name='$name',age='$age' WHERE id=$id");
if (mysql_errno()){
    echo mysql_error();
}else{
    header("Location:allusers.php");
}