<?php
//第一次登陆的时候，通过用户输入的信息来确认用户
if ( ( $_GET['username'] != null ) && ( $_GET['password'] != null ) ) {
    $userName = $_POST['username'];
    $password = $_POST['password'];
    //从db获取用户信息
    //PS：数据库连接信息改成自己的 分别为主机 数据库用户名 密码
    $conn = mysqli_connect('localhost','root','');

    mysqli_select_db($conn,'login');

    $sql = "select * from user where `username` = '$userName' ";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    if ($row['passwd'] == $password) {
        //密码验证通过，设置cookies，把用户名和密码保存在客户端
        setcookie('username',$userName,time()+60*60*24*30);//设置时效一个月,一个月后这个cookie失效
        setcookie('password',$password,time()+60*60*24*30);
        //最后跳转到登录后的欢迎页面
        header('Location: welcome.php' . "?username=$userName");
    }
}

//再次访问的时候通过cookie来识别用户
if ( ($_COOKIE['username'] != null)  && ($_COOKIE['password'] != null) ) {
    $userName = $_COOKIE['username'];
    $password = $_COOKIE['password'];

    //从db获取用户信息
    //PS：数据库连接信息改成自己的 分别为主机 数据库用户名 密码
    $conn = mysqli_connect('localhost','root','');
    $res = mysqli_query($conn,"select * from user where `username` =  '$userName' ");
    $row = mysqli_fetch_assoc($res);
    if ($row['passwd'] == $password) {
        //验证通过后跳转到登录后的欢迎页面
        header('Location: welcome.php' . "?username=$userName");
    }
}

?>
<html>
<head>

</head>
<body>
<form action="" method="get">
    <div>
        用户名：<input type="text" name="username" />
        密  码：<input type="text" name="password" />
        <input type="submit" value="登录">
    </div>
</form>
</body>
</html>
