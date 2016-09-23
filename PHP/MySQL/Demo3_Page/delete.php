<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/19
 * Time: 下午5:46
 */

include "connection.php";

$seleteSQL = "SELECT * FROM user";
$result = mysqli_query($conn, $seleteSQL);
while ($data = mysqli_fetch_assoc($result)){
    echo $data["username"]."<p>";
}

$deleteSQL = "DELETE FROM user WHERE id IN (7,8,9)";
if (mysqli_query($conn,$deleteSQL)) {
    echo '删除成功';
}else {
    echo '删除失败';
}

