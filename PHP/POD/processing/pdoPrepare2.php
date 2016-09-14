<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 9:52 PM
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


//2.?号式预处理的sql语句
$sql = "insert into students(id,name,age) values(?,?,?)";
$stmt = $pdo->prepare($sql);

//3.对?号的参数绑定
//第一种绑定方式
//$stmt->bindValue(1,null);
//$stmt->bindValue(2,'test');
//$stmt->bindValue(3,50);

//第二种绑定方式
//$stmt->bindParam(1,$id);
//$stmt->bindParam(2,$name);
//$stmt->bindParam(3,$age);
//$id = null;
//$name = 'liujianyong';
//$age = 25;

//第三种绑定方式
$stmt->execute(array(null,'guoying','24'));

//4.执行
$stmt->execute();
echo $stmt->rowCount();

