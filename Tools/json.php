<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/7/16
 * Time: 10:31 PM
 */


//  encode
$arr = array(1,2,3,5,"faf","12344","name"=>"xiaoming",array("a","b"));
//print_r($arr);
//
//echo "<br>";
//echo json_encode($arr);

$obj = array("h"=>"Hello","w"=>"World",array("1",2,3));
//echo json_encode($obj);


// decode
$jsonStr = '{"h":"Hello","w":"Word","1":[1,1,2]}';
$jsonStr2 = '{"h":"Hello","w":"World","0":["1",2,3]}';
$obj2 = json_decode($jsonStr2);
echo $obj2->h;

