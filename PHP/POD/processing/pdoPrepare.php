<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 9:15 PM
 */


/**
 * ?号式预处理语句,一共有3种绑定方式
 */
//1.链接数据库


try{
    $pdo = new PDO("mysql:host=localhost;dbname=pdoDB","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}catch (PDOException $err){
    die("数据库链接失败".$err->getMessage());
}

/*
 * 别名式的预处理语句
 */
//2.预处理的sql语句
$sql = "insert into students(id,name,age) values(:id,:name,:age)";
$stmt = $pdo->prepare($sql);

//3.对?号的参数绑定
//第一种绑定方式
//$stmt->bindValue("id",null);
//$stmt->bindValue("name",'ceshi');
//$stmt->bindValue("age",90);

//第二种绑定方式
//$stmt->bindParam('id',$id);
//$stmt->bindParam('name',$name);
//$stmt->bindParam('age',$age);
//$id = null;
//$name = 'huhansan';
//$age = 55;

//第三种绑定方式
$stmt->execute(array('id'=>null,'name'=>'guoying','age'=>24));

//4.执行
//$stmt->execute();
echo $stmt->rowCount();