<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/7/16
 * Time: 10:48 PM
 */

//$f = fopen('data','w');
//if ($f) {
//    fwrite($f, 'Hello PHP');
//    fclose($f);
//}else{
//    echo '创建文件失败';
//}

$f = fopen('data','r');
$content = fgets($f);

while (!feof($f)){
//    echo fgets($content);
}

// get content
echo file_get_contents('data');

//echo $content;
fclose();

