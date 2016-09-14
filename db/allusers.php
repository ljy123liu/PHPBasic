<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>所有用户</title>
</head>
<body>

<a href="adduser.html">添加用户</a>

<table style='...' border='1'>
    <tr><th>id</th><th>名字</th><th>年龄</th><th>修改</th></tr>
<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/10/16
 * Time: 10:06 PM
 */

$conn = connectDB();
//mysql_select_db('test',$conn);
$result = mysql_query("SELECT * FROM users ORDER BY id DESC");
$dataCount = mysql_num_rows($result);

for ($i = 0;$i < $dataCount; $i++){
  $result_arr = mysql_fetch_assoc($result);
//    print_r($result_arr);
    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];
//    echo "<tr><td>$id</td><td>$name</td><td>$age</td></tr>";
    ?>

     <tr> <td><?php echo $id ?></td> <td><?php echo $name ?></td> <td><?php echo $age ?></td> <td><a href='edituser.php?id=<?php echo  $id ?>'>修改 </a> <a href='deleteusers.php?id=<?php echo  $id ?>'>删除</a></td></tr>;
   
    <?php                                                                                                                                                  
}

?>
</table>
</body>
</html>

