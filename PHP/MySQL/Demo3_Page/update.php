<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/19
 * Time: 下午6:49
 */
include 'connection.php';
$id = $_GET['id'];
//echo $id;
$username = $_GET['username'];
//echo $username;
$password = $_GET['password'];

$updateSQL = "UPDATE user SET username='$username',password='$password' WHERE id=$id";
$result = mysqli_query($conn,$updateSQL);
?>
<form action="list.php">
    <input type="submit" value="返回">
</form>
//header("list.php");