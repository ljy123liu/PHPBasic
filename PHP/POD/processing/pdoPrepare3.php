<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 9:55 PM
 */

//蚕蛹预处理SQL查询

//1.链接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=pdoDB","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}catch (PDOException $err){
    die("数据库链接失败".$err->getMessage());
}

//2.预处理的SQL语句
$sql = "select id,name,age from students";
$stmt = $pdo->prepare($sql);
//3.执行
$stmt->execute();
//foreach ($stmt as $row){
//    echo $row['id']."------".$row['name']."<br>";
//}

$stmt->bindColumn(1,$id);
$stmt->bindColumn('name',$name);
$stmt->bindColumn('age',$age);

while ($row=$stmt->fetch(PDO::FETCH_COLUMN)){
    echo "{$id}:{$name}:{$age}.<br>";
}