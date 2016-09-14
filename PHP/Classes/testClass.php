<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/7/16
 * Time: 5:12 PM
 */
require_once 'jkxy/Hello.php';
require_once 'muke/Hello.php';
require_once 'ps/People.php';
require_once 'ps/Man.php';
$j = new  \jkxy\Hello();
$j -> sayHello();

$d = new  \muke\Hello();
$d -> sayHello();

$m = new People(10,"liming","男");
echo $m -> getName()."<br>";
echo $m -> getAge()."<br>";

//类方法
People::sayHello();
//
//for ($i = 0;$i < 100;$i++){
//    $m1 = new People(10,"lili","女");
//}

$man = new \People\Man(25,"王安石");
$man -> hi();

