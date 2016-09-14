<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/7/16
 * Time: 10:21 PM
 */

//时间戳
//echo time();

//日期
//echo date_default_timezone_get()."<br>";

//方法一
date_default_timezone_set('Asia/Shanghai');
echo date('Y-m-d H:i:s');
//方法二
echo date('Y-m-d H:i:s',time());

