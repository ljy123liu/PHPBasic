<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/16
 * Time: 下午3:22
 */

//绘图
//$im = imagecreate(200,50);
//$white = imagecolorallocate($im,255,66,19);
//imagegif($im);

header_image("content-type:image/jpeg");
$im = imagecreatefromjpeg("image/superman.jpg");
$textcolor = imagecolorallocate($im,56,73,136);
$motto = iconv("gb2312","utf-8","超人");


