<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/2/16
 * Time: 3:47 PM
 */

$example = "outside the function";
function example(){
    $example = "in the func";
    echo "in function print: $example.<br>";
}

example();
echo "outside the func print:$example.<br>";

//  global关键字
$zy = "can't see";
$zyy = "will see";
function lxt() {
//    echo "$zy.<br>";
    global  $zyy;
    echo  "$zyy.<br>";
}

lxt();

echo "------------------------------------.<br>";
//可变变量:一种独特的变量
$change_name = "trans";
$trans = "You can see me!";
echo $change_name;
echo "<br>";
echo $$change_name;

