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
//$_SESSION['name'] = 'session post value';

header("Location:a.php");
