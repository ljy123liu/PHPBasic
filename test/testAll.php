
<?php

//$float = 1.234;
//$result = strval($float);
//echo $float+'</br>';
//var_dump($float);
//echo '</br>';
//echo $result+'</br>';
//var_dump($result);

//定义浮点变为整型
$fo = 250.18; //settype第二个参数是int,你实验的时候要记得第二个参数要为字符串类型
settype($fo,'int'); //输出看看结果
var_dump($fo);

define('kTest',123);

if (!defined('kTest')){
    echo 'error';
}else{
    echo 'success:'+kTest;
}