<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/8/16
 * Time: 12:35 AM
 */

$img = imagecreatefromjpeg('logo2.jpg');
imagestring($img,5,50,50,'12233445',imagecolorallocate($img,255,0,0));
header('Content-type: image/jpeg');
imagejpeg($img);