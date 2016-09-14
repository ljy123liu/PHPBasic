<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>连接数据库</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/8/16
 * Time: 10:44 PM
 */

$conn = mysql_connect('localhost','root','');
if ($conn){
    mysql_select_db('myapp',$conn);
//    $result = mysql_query("SELECT * FROM users WHERE id = 2" );
//    $result = mysql_query("SELECT name,age FROM users WHERE id = 2" );
//    $result_arr = mysql_fetch_assoc($result);
//    print_r($result_arr);
//    $dataCount = mysql_num_rows($result);
//    for ($i = 0;$i < $dataCount;$i++){
//        print_r(mysql_fetch_assoc($result));
//        echo "<br>";
//    }


    $result = mysql_query("SELECT COUNT(*) FROM users WHERE name = 'lisi'");
    $result_arr = mysql_fetch_array($result);
    echo '数据条数'.$result_arr[0];
}else{
    echo 'error';
}
?>
</body>
</html>
