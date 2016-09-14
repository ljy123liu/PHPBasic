<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/2/16
 * Time: 1:45 PM
 */

/*
 * 数字索引数组
 */
//直接创建
$arr = array();
$arr[0] = 'Hello';
$arr[1] = 'World';
$arr[2] = 2;
$arr[3] = 3.14;
print_r($arr);
echo "<br>";
$array1 = array("java","php","python");
print_r($array1);
echo "<br>";
echo $array1[1]."<br>";
echo "count".count($arr)."<br>";

/*
 * 关联数组,相当于字典
 */
$array2 = array("cat"=>"my","dog"=>"her","cow"=>"his");
echo $array2["cat"]."<br>";

/*
 * 二维数组
 */
$array3 = array(
            "书籍"=>array("生物","地理","化学"),
            "体育用品"=>array("m"=>"足球","n"=>"篮球"),
            "水果"=>array("橙子",8=>"葡萄","苹果"));
print_r($array3);


echo "<br>";
echo "<br>";

/*
 * 遍历数组
 */
$array4 = array(
            "baidu"=>"www.baidu.com",
            "google"=>"www.google.com",
            "taobao"=>"www.taobao.com");

foreach ($array4 as $link) {
    echo  $link.'<br><br>';
}

/*
 * 数组计数
 */
$array5 = array("1","2","3",4,5,6,7,8,9);
echo count($array5)."<br>";

/*
 * 查询数组中指定元素,返回该元素在数组中的位置
 */
echo array_search("9",$array5)."<br>";

/*
 * 弹出数组中最后一个元素
 */
echo "数组中最后一个元素是:".array_pop($array5)."<br>";
print_r($array5);

echo "<br>";
echo "<br>";

/*
 * 向数组中添加元素,返回的是数组的总数
 */
print_r(array_push($array5,"20"));

echo "<br>";
echo "<br>";
/*
 * 删除数组中重复的元素
 */
$array6 = array(1,1,1,2,2,3,4,5,6,6,7,89,9);
$result = array_unique($array6);
print_r($result);

