
<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/8/16
 * Time: 12:24 AM
 */
$img = imagecreate(400,300);
imagecolorallocate($img,255,255,255);
imageellipse($img,200,200,50,50,imagecolorallocate($img,255,0,0));
header('Content-type: image/png');
imagepng($img);