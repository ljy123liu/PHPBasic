<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 10:01 PM
 */
//采用预处+事务处理执行SQl


//1.链接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=pdoDB","root","");
}catch (PDOException $err){
    die("数据库链接失败".$err->getMessage());
}

//2.执行数据操作

    //开启事务
    $pdo->beginTransaction();
    $sql = "insert into students(id,name,age) value(?,?,?)";
    $stmt = $pdo->prepare($sql);
    //传入参数
    $datalist = array(
        array(null,"test1",1),
        array(null,"test2",2),
    );
    $isCommit = true;

foreach ($datalist as $data) {
    $stmt->execute($data);
    if ($stmt->errorCode()>0){
        $pdo->rollBack();
        $isCommit = false;
        break;
    }
}
if ($isCommit){
    //提交事务
    $pdo->commit();
}


