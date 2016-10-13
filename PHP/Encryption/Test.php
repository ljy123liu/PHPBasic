<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/10/9
 * Time: 上午9:45
 */
include 'encryption.php';

$str = '123456789';
$key = 'www.baidu.com';
$encode = authcode($str,'ENCODE',$key,0);
echo '加密: '.$encode.'<p>';

$decode = authcode($encode,'DECODE',$key,0);
echo '解密: '.$decode.'<p>';

//q1:
$a = '1';
$b = &$a;
$b = "2$b";
echo $b.'<p>';;

//q2:


