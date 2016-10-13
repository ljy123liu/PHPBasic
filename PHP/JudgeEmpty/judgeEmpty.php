<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/30
 * Time: 下午4:19
 */
$a = 0;
$b = '';
$c = array();

//isset:判断变量是否被初始化
echo 'isset:'.'<p>';
if (!isset($b)) echo 'b未被初始化'.'<p>';
if (!isset($d)) echo 'd未被初始化'.'<p>';

echo 'empty:'.'<p>';
//empty:检测变量是否为空
if (empty($a)) echo 'a为空'.'<p>';
if (empty($b)) echo 'b为空'.'<p>';
if (empty($c)) echo 'c为空'.'<p>';

echo 'var == null :'.'<p>';
//var == null,判断变量是否为空
if ($a==null) echo 'a为空'.'<p>';
if ($b==null) echo 'b为空'.'<p>';
//if ($d==null) echo 'd为空'.'<p>';

echo 'is_null :'.'<p>';
//is_null,检测变量是否为null
$e = null;
$f = false;
if (is_null($e)) echo 'e为null'.'<p>';
if (is_null($f)) echo 'f为null'.'<p>';
