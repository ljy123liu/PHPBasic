<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/7/16
 * Time: 9:53 PM
 */
//对session进行操作之前要先开启
session_start();

$_SESSION = ['session 多页面传值,登陆状态修改'];
session_destroy();
$_SESSION['name'] = 'session post value';

//跳转
//header("Location:a.php");

//设置时间
session_start();
$time = 20;
setcookie(session_name(),session_id(),time()+$time,"/");
//最后一个参数为可选参数,是放置Cookie的路径 
$_SESSION['user'] = "mr";

