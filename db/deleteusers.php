<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 12:59 AM
 */

require_once 'functions.php';
if (empty($_GET['id'])) {
    die('id is empty');
}

connectDB();
$id = intval($_GET['id']);
mysql_query("DELETE FROM users WHERE id = $id");
echo '跳转';
if (mysql_errno()){
    die('Fail to delete user with id $id');
} else {
    echo '跳转';
    header("Location:allusers.php");
}
