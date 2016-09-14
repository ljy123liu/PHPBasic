<!DOCTYPE html>
<html lang="en">
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
 * Time: 7:09 PM
 */
if ($_POST['a']&&$_POST['b']){
    echo $_POST['a']+$_POST['b'];
} else {
    echo '请输入参数';
}
?>

</body>
</html>


