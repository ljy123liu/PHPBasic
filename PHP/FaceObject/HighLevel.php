<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/17
 * Time: 上午1:18
 */

/*
 * final,该类不能被继承,没有子类
 */

final class Sport {
    function __construct()
    {
        echo 'initialize object';
    }
}

/*
 * __call
 */

class call {
    function myDream(){
        echo '对象方法'."<p>";
    }

    function __call($name, $arguments)
    {
        echo 'method name is '.$name."<p>";
        echo '参数名';
        var_dump($arguments);
    }
}

$callObject = new call();
$callObject->myDream();
$callObject->myDream('a','b');

/*
 * sleep,wakeup
 */
class sleep {
    private $type = 'DIY';
    public function getType() {
        return $this->type;
    }

    public function __sleep()
    {
        echo '使用serialize()函数将对象保存起来,可以存到文本文件\数据库等地方'."<p>";
        return $this;
    }

    public function __wakeup()
    {
        echo '当需要该数据时,使用unserialize()函数对已序列化的字符串进行操作,将其转换回对象'.'<p>';
    }
}

$mySleep = new sleep();
$i = serialize($mySleep);
echo '序列化后的字符串: '.$i.'<p>';
$reBook = unserialize($i);
echo '还原后的成员变量: '.$reBook->getType().'<p>';

/*
 * __toString,将对象转化为字符串,直接输出对象会发生错误
 */

class toString {
    private $type = 'Test';
    public function __toString()
    {
        return $this->type;
    }
}

$to = new toString();
echo $to;

/*
 * __autoload
 */

