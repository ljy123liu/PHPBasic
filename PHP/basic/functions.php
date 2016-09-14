<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/2/16
 * Time: 12:17 AM
 */

function helloPHP(){
    echo  'hello PHP <br>';
}

helloPHP();

function sayHelloTo($name){
    echo 'Hello'.$name.'<br>';
}

sayHelloTo('xiaoming');

function aAndB($a,$b){
//    echo  'a = '.$a.' , b = '.$b.''; 麻烦
    echo "a=$a,b=$b <br>";
}

aAndB(10,20);

//有返回值
function aAddB($a,$b){
    return $a + $b;
}
echo  aAddB(10,50)."<br>";

function example($num) {
    return "$num * $num = ".$num * $num;
}
echo example(10)."<br>";




//默认参数:当使用默认参数时,默认参数必须放在非默认参数的右侧,否则函数可能会出错
function values($price,$tag=""){
    $price = $price+($price*$tag);
    echo  "价格:".$price."<br>";
}

values(100);
values(100,0.5);

//出错范例
//function value2($price="",$tag){
//    $tag = $tag+($tag*$price);
//    echo  "tag:".$tag."<br>";
//}
//
//value2(100);
//value2(100.0.25);


//字符串函数
//1.trim():去除字符串首尾空格和特殊字符,并且返回处理后的字符串
echo "trim: string funcion"."<br>";
$str = "\r\r(:@_@_对方里卡多及法律框架啊浪费 @_@_:)";
echo trim($str)."<br>";
echo trim($str,"\r\r(: :)")."<br>";
echo "------------------------------"."<br>";

//2.ltrim():去除字符串左边的空格和特殊字符
$str2 = " (:@_@_ 去除左边特殊字符  @_@_:)  abcd";
echo ltrim($str2)."<br>";//去除左边空格
echo ltrim($str2,"(:@_@) ")."<br>";

echo "------------------------------"."<br>";
//3.rtrim:去除字符串右边的空格和特殊字符
$str3 = "   (:@_@_   去除右边特殊字符    @_@_:)   ";
echo rtrim($str3)."<br>";//去除右边空格
echo rtrim($str3," @_@_:)");


/*
 * 转义,还原字符串数据
 *
 */
echo "<br>"."------------------------------"."<br>";
echo "<p>";
//1.手动转义
//echo "select * from tb_book where bookname = \'PHP5 从入门到精通\'";
echo 'select * from tb_book where bookname = \'PHP5 从入门到精通\'';

echo "<p>";

//2.自动转义
$str4 = "select * from tb_book where bookname = 'PHP5 从入门到精通'";
echo $str4."<br>";
$a = addslashes($str4);//转义
echo $a."<br>";
$b = stripcslashes($a);//还原
echo  $b."<br>";

echo "转义特定字符串"."<p>";

//2.1转义特定字符串
$str5 = "编程体验网";
echo $str5."<br>"."-------------------------------------------------";
$a1 = addcslashes($str5,"编程体验网");
echo $a1."<br>";
$b1 = stripcslashes($a1);
echo $b1."<br>";

//3.获取字符串的长度
echo "获取字符串的长度"."<p>"."---------------------------------------------";
echo strlen("上海万间信息科技有限公司")."<br>";

//4.截取字符串
echo "截取字符串"."<p>"."-----------------------------------";
echo substr("She is a well-read girl",0)."<br>";
echo substr("She is a well-read girl",4,14)."<br>";
echo substr("She is a well-read girl",-4,4)."<br>";
echo substr("She is a well-read girl",0,-4)."<br>";

//5.比较字符串
echo "比较字符串"."<p>";
$strr1 = "改善既有代码的设计";
$strr2 = "改善既有代码的设计";
$strr3 = "mrsoft";
$strr4 = "MRSOFT";
echo strcmp($strr1,$strr2)."<br>";
echo strcmp($strr3,$strr4)."<br>";
echo strcasecmp($strr3,$strr4)."<br>";

//6.自然排序法比较
echo "自然排序法比较"."<p>";
$sttr1 = "str2.jpg";
$sttr2 = "str10.jpg";
$sttr3 = "mrosoft1";
$sttr4 = "MROSOFT2";
echo strcmp($sttr1,$sttr2)."<br>";
echo strcmp($sttr3,$sttr4)."<br>";
echo strnatcmp($sttr1,$sttr2)."<br>";
echo strnatcmp($sttr3,$sttr4)."<br>";

//7.指定从源字符串的位置开始比较
echo "指定从源字符串的位置开始比较"."<p>";
$sr1 = "I like PHP";
$sr2 = "i am fine";
echo strncmp($sr1,$sr2,2)."<br>";

//8.检索字符串
echo "检索字符串"."<p>";
function checkString($fileName){
    $isOK = strstr($fileName,".");
    if ($isOK == ".jpg"){
        return "图片格式正确";
    } else{
        return "图片格式错误";
    }
}

echo checkString("ac.jpg")."<br>";
echo checkString("bb.png")."<br>";

//9.检索字符串出现的次数
echo "检索字符串出现的次数"."<p>";
$sstr1 = "改善既有代码代码代码";
echo substr_count($sstr1,"代码")."<br>";

//10.替换字符串
echo "替换字符串"."<p>";
//10.1指定字符替换
$sss1 = "某某";
$sss2 = "**";
$sss3 = "    某某公司是一个一个大公司";
echo str_ireplace($sss1,$sss2,$sss3)."<br>";

//10.2字符串范围替换
$rrr1 = "用今日的辛勤工作,换明日的双倍回报";
$rrr2 = "百倍";
echo substr_replace($rrr1,$rrr2,37,6)."<br>";

//11.格式化字符串
echo "格式化字符串"."<p>";
$number = 134.123;
$number2 = 1312344.1241345453;
echo number_format($number)."<br>";
echo number_format($number,2)."<br>";
echo number_format($number,3)."<br>";
echo number_format($number2,2,".",".")."<br>";

//12.分割字符串
echo "分割字符串"."<p>";
$strArray = "PHP放假阿独立开发@附近的拉附近啊@ 放大了飞机卡 @风大开发 @飞机啊靠";
$str_arr = explode("@",$strArray);
print_r($str_arr)."<br>";

//13.合成字符串
echo "合成字符串"."<p>";
$sa1 = "PHP放假阿独立开发@附近的拉附近啊@ 放大了飞机卡 @风大开发 @飞机啊靠";;
$array = explode("@",$sa1);
$str_array = implode("@",$array);
echo $str_array."<br>";
