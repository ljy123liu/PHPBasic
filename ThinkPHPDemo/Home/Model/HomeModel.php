<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/22
 * Time: 下午7:58
 */
namespace Home\Model;
use Think\Model;
class HomeModel extends Model {
    protected $tablePrefix = '';

    function sayHello() {
        echo 'hello';
    }
}

