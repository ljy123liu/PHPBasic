<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 7:59 PM
 */

try {
    $pod = new PDO("mysql:host=localhost;dbname=pdoDB","root","");
}catch (PDOException $e){
    die("数据库链接失败".$e->getMessage());
}
//2.执行query(查询)返回一个预处理对象.这是一种快捷操作方法
//$sql = 'select * from students';
//foreach ($pod->query($sql) as $val){
//    echo $val['id']."------".$val['name']."<br>";
//}

//3.插入
//$sql = "insert into students values(null,'wangmei',15)";
//$res = $pod->exec($sql);
//if ($res){
//    echo 'success';
//}

//4.删除
//$sql = "delete from students where id = 1";
//$res = $pod->exec($sql);
//if ($res){
//    echo 'success';
//}

//5.修改
$sql = "update students set name = 'js' where id = 3";
$res = $pod->exec($sql);
if ($res){
    echo 'success';
}