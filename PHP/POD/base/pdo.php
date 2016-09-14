<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 6:45 PM
 */
//1.链接数据库
require_once "pdoConfig.php";
try {
    $pod = new PDO("mysql:host=localhost;dbname=pdoDB","root","");
}catch (PDOException $e){
    die("数据库链接失败".$e->getMessage());
}
//echo $pod->getAttribute(PDO::ATTR_CLIENT_VERSION);
//print_r($pod);
//2.执行query(查询)返回一个预处理对象
$sql = "select * from students";
$stmt = $pod->query($sql);
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($list);

//3.解析数据
foreach ($list as $val) {
    echo $val['id']."-----".$val['name']."<br>";
}

//4.释放资源
$stmt = null;
$pod = null;