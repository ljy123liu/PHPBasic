<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/19
 * Time: 下午2:30
 */

//echo ($_POST['password']);

if(trim($_GET['password']) != trim($_GET['repassword'])){
    exit('两次密码不一致,请返回上一页');
}

if (!$_GET['username']){
    exit('用户名不能为空');
}

$username = $_GET['username'];
$password =$_GET['password'];

$time = time();

//REMOTE_ADDR返回的是IP地址，我们可以用ip2long将其转为整型存储
$ip = $_SERVER['REMOTE_ADDR'];

$conn = mysqli_connect('localhost', 'root', '');
//如果有错误，存在错误号
if (mysqli_errno($conn)) {
    echo mysqli_error($conn);
    exit;
}

mysqli_select_db($conn, 'myapp');

mysqli_set_charset($conn, 'utf8');

$sql = "insert into user(username,password,createtime,createip) values('" . $username . "','" . $password . "','" . $time . "','" . $ip . "')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo '成功'.'<p>';
} else {
    echo '失败'.'<p>';

}

echo '当前用户插入的ID为' . mysqli_insert_id($conn);

mysqli_close($conn);


