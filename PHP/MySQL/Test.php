<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/19
 * Time: 下午11:29
 */

include "Demo3_Page/connection.php";
$sql = "select * from user";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$arr = mysqli_fetch_array($result);
print_r($arr);
//print_r($data);
