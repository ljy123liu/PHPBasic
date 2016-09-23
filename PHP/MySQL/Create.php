<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/19
 * Time: 下午12:57
 */


$link = mysqli_connect("localhost","root","") or die("不能链接到数据库服务器!可能是数据库服务器没有启动,或者用户名密码有误!".mysqli_error());
if ($link){
    echo "链接数据库成功"."<p>";
}

//1.
//$db_selected = mysqli_select_db($link,"myapp");
//2.mysqli_query查询指令专用函数,所有sql语句都通过它执行,并返回结果集
$db_selected = mysqli_query($link,"use myapp");
if ($db_selected) {
    echo "数据库选择成功"."<p>";
}else {
    echo "数据库选择失败"."<p>";
}

$sql = "CREATE TABLE IF NOT EXISTS houses( ".
    "house_id INT NOT NULL AUTO_INCREMENT, ".
    "house_name VARCHAR(100) NOT NULL, ".
    "house_rent INT NOT NULL, ".
    "PRIMARY KEY (house_id)); ";

//中文
mysqli_query($link,"SET NAMES 'utf8'");

$retval = mysqli_query($link, $sql);
if(! $retval )
{
    die('数据表创建失败: ' . mysqli_error());
}
echo "数据表创建成功\n";

$addsql = "INSERT INTO houses(house_name,house_rent) VALUES('金葵',2500)";

mysqli_query($link,$addsql);

mysqli_close($link);

