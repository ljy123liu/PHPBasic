<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/2/16
 * Time: 1:01 PM
 */
$str = 'Hello PHP Java C# C++';

//子字符串在字符串中的位置
//echo  strpos($str,'PH');

//提取前两位之后的字符串
$str1 = substr($str,2);
//echo  $str1,'<br>';

//按两位进行分割
$result = str_split($str,2);
//print_r($result,'<br>');

//按特定字符进行分割
$result1 = explode(' ',$str);
//print_r($result1);
//echo  '<br>';

//拼接字符串
$num = 100;
$str2 = $str.'<br>Object-c'.$num;
//echo  $str2;

$str3 = "$str<br>object-C $num";
//echo  $str3;

//单引号和双引号
$d = 'object-c';
echo  "$d";
echo '<br>';
echo  '$d';
echo '<br>';
echo  $d;
echo '<br>';

echo '-------------------------------------------------';

