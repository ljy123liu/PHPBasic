<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/4
 * Time: 下午3:41
 */

//默认时区
$timezone = date_default_timezone_get();
echo  $timezone."</br>";

//自定义时区
define('TIME_ZONE','Asia/shanghai');
$shanghai_timezone = date_default_timezone_set(TIME_ZONE);
echo date('Y-m-d H:i:s')."</br>";
echo date('Y年m月d日')."</br>";

//unix时间戳
$time = time();
echo $time."</br>";

//日期验证函数
var_dump(checkdate(2,29,2016));
