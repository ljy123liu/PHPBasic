<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/26
 * Time: 下午2:45
 */
var_dump($_POST['title']);
if (isset($_POST['title'])) {
    echo $_POST['title'];
}else {
    echo 'error';
}