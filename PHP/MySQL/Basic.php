<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/18
 * Time: 下午10:43
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


//select
$data = mysqli_query($link,"select * from users");
if ($data){
//    print_r($data);
    foreach ($data as $dict){
        echo $dict['name']."<p>";
    }
    echo "<p>";
}else {
    echo "selectd data erro"."<p>";
}

//insert
$resutMulity = mysqli_query($link,"INSERT INTO users(name,age) VALUES('黄小明',0),('周杰伦',2),('蔡依林',10)");
if ($resutMulity) {
    echo $resutMulity."<p>";
}else {
    echo 'add error'."<p>";
}

$result1 = mysqli_query($link,"INSERT INTO users(name,age) VALUES('baibaibai',2000)");
if ($result1) {
    echo $result1."<p>";
}else {
    echo 'add error'."<p>";
}


//update
$result2 = mysqli_query($link,"UPDATE users SET name='aiaiai',age=300 WHERE id=2");
if ($result2) {
    echo $result2."<p>";
}else {
    echo 'update error'."<p>";
}

//delete
$resut3 = mysqli_query($link,"DELETE FROM users WHERE id > 3");







