<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/7/16
 * Time: 9:58 PM
 */
session_start();
//
echo 'start'."<p>";
if (session_id()){
    echo session_id();
} else {
    echo "no name";
}

//if (isset($_SEESION['name'])){
//    echo $_SEESION['name'];
//} else {
//    echo "no name";
//}