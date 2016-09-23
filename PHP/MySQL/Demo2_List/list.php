<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/19
 * Time: 下午3:28
 */


$conn = mysqli_connect("localhost","root","") or die("不能链接到数据库服务器!可能是数据库服务器没有启动,或者用户名密码有误!".mysqli_error());
if ($conn){
    echo "链接数据库成功"."<p>";
}

//1.
//$db_selected = mysqli_select_db($link,"myapp");
//2.mysqli_query查询指令专用函数,所有sql语句都通过它执行,并返回结果集
$db_selected = mysqli_query($conn,"use myapp");
mysqli_set_charset($conn, 'utf8');

if ($db_selected) {
    echo "数据库选择成功"."<p>";
}else {
    echo "数据库选择失败"."<p>";
}

$sql = "select id,username,createtime,createip from user order by id desc";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result)) {


    echo '<table width="800" border="1">';

    while ($row = mysqli_fetch_assoc($result)) {

        echo '<tr>';

        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . date('Y-m-d H:i:s', $row['createtime']) . '</td>';
        echo '<td>' . long2ip($row['createip']) . '</td>';
        echo '<td><a href="edit.php?id=' . $row['id'] . '">编辑用户</a></td>';
        echo '<td><a href="delete.php?id=' . $row['id'] . '">删除用户</a></td>';

        echo '</tr>';
    }

    echo '</table>';

} else {
    echo '没有数据';
}

mysqli_close($conn);