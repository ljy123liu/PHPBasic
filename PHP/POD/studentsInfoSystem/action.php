<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/15/16
 * Time: 11:19 PM
 */

//1.链接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=pdoDB;","root","");
}catch(Exception $err){
    die("数据库链接失败".$err->getMessage());
}

//2.通过action的值做相应操作
switch ($_GET['action']){
    case 'add'://增加操作
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age= $_POST['age'];
        $classid = $_POST['classid'];

        $sql = "insert into studentsInfoSystem values(NULL '{$name}','{$sex}','{$age}','{$classid}')";
        $rw = $pdo->exec($sql);
        if ($rw > 0){
            echo "<script>alert('增加成功');window.location='index.php'</script>";
        }else {
            echo "<script>alert('增加失败');window.history.back()</script>";
        }
    break;

    case 'del';//删除操作
        $id = $_GET['id'];
        $sql = "delete from studentsInfoSystem where id={$id}";
        $pdo->exec($sql);
        header("Location:index.php");
        break;
        
}