<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/13
 * Time: 下午9:45
 */

/*
 * 时区设置
 */
//1.修改php.ini,找到[date]下的"date.timezone=",修改为"date.timezone=Asia/Hong_Kong",重启Apache服务器
//2.在使用日期函数之前添加以下函数
//PRC中华人民共和国
date_default_timezone_set("PRC");
$dateStr = date('Y-m-d');
echo $dateStr."<p>";

/*
 * 获得本地化时间戳
 */
echo "mktime函数返回的时间戳: ".mktime()."<p>";
echo "当前的日期为: ".date("Y-m-d",mktime())."<p>";
echo "当前的时间为: ".date("H:i:s",mktime())."<p>";

/*
 * 获取当前时间戳
 */
$nextWeek = time()+(7 * 24 * 60 *60);
echo "Now: ".date("Y-m-d, H:i:s")."<p>";
echo "NextWeek: ".date("Y-m-d, H:i:s",$nextWeek)."<p>";

/*
 * 获取当前日期和时间
 */
echo "DATE_ATOM = ".date(DATE_ATOM)."<p>";
echo "DATE_COOKIE = ".date(DATE_COOKIE)."<p>";
echo "DATE_ISO8601 = ".date(DATE_ISO8601)."<P>";
echo "DATE_RFC822 = ".date(DATE_RFC822)."<P>";
echo "DATE_RFC850 = ".date(DATE_RFC850)."<P>";
echo "DATE_RSS = ".date(DATE_RSS)."<P>";
echo "DATE_W3C = ".date(DATE_W3C)."<P>";

/*
 * 获取日期信息
 */
$arr = getdate();
echo $arr["year"]."-".$arr["mon"]."-".$arr["mday"]."  ".$arr["hours"].":".$arr["minutes"].":".$arr["seconds"]."  weekday:".$arr["weekday"]."<p>";

/*
 * 检验日期的有效性
 */
$year = "2008";
$month = "2";
$day1 = "29";
$day2 = "30";
var_dump(checkdate($month,$day1,$year));
echo "<p>";
var_dump(checkdate($month,$day2,$year));

/*
 * 显示本地化的日期和时间
 */
echo "<p>";
setlocale(LC_ALL,"en_US");
echo "美国格式: ".strftime("Today is %A")."<p>";
setlocale(LC_ALL,"chs");
echo "简体中文格式: ".strftime("今天是%A")."<p>";
setlocale(LC_ALL,"cht");
echo "繁体中文格式: ".strftime("今天是%A")."<p>";

/*
 * 将日期和时间解析为UNIX时间戳
 */
echo "<p>";
echo "<p>";
echo "<p>";
echo strtotime("now")."<p>";
echo "输出时间:".date("Y-m-d H:i:s",strtotime("now"))."<p>";
echo strtotime("21 May 2009")."<p>";
echo "输出时间:".date("Y-m-d H:i:s",strtotime("21 May 2009"))."<p>";

/*
 * 
 */



