<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/4
 * Time: 下午5:19
 */

//list
$people = ['陈奕迅','mc仁','田馥甄','科比'];
list($singer,$unknow,$female,$basketball) = $people;
echo $singer."</br>";
echo $unknow."</br>";
echo $female."</br>";
echo $basketball."</br>";


//each
$people2 = ['eson'=>'陈奕迅','mc'=>'mc仁','hebe'=>'田馥甄','kobe'=>'科比'];
echo "</br>";
$data = each($people2);
var_dump($data);
echo '</pre>';


echo "</br>";
$data = each($people2);
var_dump($data);
echo '</pre>';


echo "</br>";
$data = each($people2);
var_dump($data);
echo '</pre>';

