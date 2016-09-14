<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/2/16
 * Time: 3:31 PM
 */

//常量
define("MESSAGE","能看到一次");
echo  MESSAGE."<br>";
//echo  Message."<br>";

define("COUNT","能看到多次",true);//true:大小写不敏感
echo  COUNT."<br>";
echo  Count."<br>";

$name = "count";
echo constant($name)."<br>";
echo (defined("MESSAGE"))."<br>";

//预定义常量

echo "当前文件路径: ".__FILE__."<BR>";
echo "当前行数: ".__LINE__."<br>";
echo "当前PHP版本信息: ".PHP_VERSION."<BR>";
echo "当前操作系统: ".PHP_OS;

