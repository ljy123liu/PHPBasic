<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 8:49 PM
 */
//默认是布提示的,需要用errorCode和errorInfo获取信息
//try{
//    $pdo = new PDO("mysql:host=localhost;dbname=pdoDB","root","");
//}catch (PDOException $err){
//    die("数据库链接失败".$err->getMessage());
//}
//
//$sql = "insert into students values(null,'jike',16)";
//$res = $pdo->exec($sql);
//if ($res){
//    echo "OK";
//}else {
//    echo $pdo->errorCode()."<br>";
//    print_r($pdo->errorInfo());
//}

//设置PDO错误提示属性
//try{
//    $pdo = new PDO("mysql:host=localhost;dbname=pdoD","root","");
//    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
//}catch (PDOException $err){
//    die("数据库链接失败".$err->getMessage());
//}
//
//$sql = "insert into students values(null,'jike',16)";
//$res = $pdo->exec($sql);
//if ($res){
//    echo "OK";
//}else {
//    echo $pdo->errorCode()."<br>";
//    print_r($pdo->errorInfo());
//}