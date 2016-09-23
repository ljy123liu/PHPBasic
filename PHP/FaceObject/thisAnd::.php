<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/17
 * Time: 上午1:08
 */

/*
 * $this
 */
class example {
    function exam() {
        if (isset($this)) {
            echo '$this的值为: '.get_class($this)."<p>";
        }else {
            echo '$this未定义';
        }
    }
}

$class_name = new  example();
$class_name->exam();

/*
 * ::
 */
class Book {
    const kname = 'computer';
    function __construct()
    {
        echo '本月图书冠军为: '.Book::kname.'<p>';
    }
}

class Math extends Book {
    const kname = 'Math';
    function __construct()
    {
        parent::__construct();
        echo '本月数学类冠军为: '.self::kname;
    }
}

$obj = new  Math();
