<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/17
 * Time: 上午12:24
 */
class SportObject {
    /*
    * 构造方法
    */
    public $name;
    public $height;
    public $sex;

    public function __construct($name,$height,$sex) {
        $this->name = $name;
        $this->height = $height;
        $this->sex = $sex;
    }

    /*
     * 析构方法
     */
    function __destruct()
    {
        echo "对象被销毁"."<p>";
    }


    function playFootball(){
        if ($this->height > 180 && $this->age > 20){
            return $this->name;
        }else {
            return $this->name."不符合要求";
        }
    }

    function playBasketball($name,$height,$sex) {
        echo "姓名: ".$name."<p>";
        echo "身高: ".$height."<p>";
        echo "性别: ".$sex."<p>";
    }
}

//$sport = new SportObject();
//echo $sport->playBasketball("xiaoming","170","man").'<p>';

$footballer = new SportObject("lilei",170,30);
echo $footballer->playFootball()."<p>";
unset($footballer);



