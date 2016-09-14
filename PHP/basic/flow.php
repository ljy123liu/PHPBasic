<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/2/16
 * Time: 10:17 AM
 */

function getLevel($score){
    if ($score > 90) {
        return '优秀';
    }elseif ($score>80) {
        return '良好';
    }elseif ($score>70) {
        return '两';
    }else {
        return '及格';
    }
}
echo getLevel(81);