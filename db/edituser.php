<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>获取数据</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/11/16
 * Time: 10:29 PM
 */

//if (isset($_GET['id'])) && empty($_GET['id']) {
//
//}
require_once 'functions.php';
if (!empty($_GET['id'])) {
    connectDB();
    $id = intval($_GET['id']);
    $result =  mysql_query("SELECT * FROM users WHERE id = $id");
    if (mysql_errno()){
        die('can not cannect db');
    }
    $arr = mysql_fetch_assoc($result);
} else {
    die('id not define');
}
?>

<form action="edituser_server.php" method="get">
    <div>用户ID
        <input type="text" name="id" value="<?php echo $arr['id']; ?>">
    </div>
    <div>用户名字
        <input type="text" name="name" value="<?php echo $arr['name']; ?>">
    </div>
    <div>用户年纪
        <input type="text" name="age" value="<?php echo $arr['age']; ?>">
    </div>
    <div>用户ID
        <input type="submit" value="提交修改">
    </div>

</form>
</body>
</html>