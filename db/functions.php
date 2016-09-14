<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/10/16
 * Time: 10:09 PM
 */
require_once 'config.php';
function connectDB() {
    $conn = mysql_connect(MYSOL_HOST,MYSQL_USER,MYSQL_PW);
    if (!$conn){
        die('can not connect db');
    }
    mysql_select_db('test');
    return $conn;
}