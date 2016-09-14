<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/8/16
 * Time: 6:33 PM
 */

if (isset($_GET['name']) && $_GET['name']){
    echo 'Hello '.$_GET['name'];
}else {
    echo '请输入名字';
}
?>
</body>
</html>

