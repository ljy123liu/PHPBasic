<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/17
 * Time: 上午12:56
 */

/*
 * 父类
 */
class SportObject {
    public $name;
    public $age;
    public $height;
    public function __construct($name,$height,$sex) {
        $this->name = $name;
        $this->height = $height;
        $this->sex = $sex;
    }

    function showMe(){
        echo "这句话不会显示";
    }
}

/*
 * 子类
 */
class PlayPingpangBall extends SportObject {
    public $weight;
    function __construct($name,$weight)
    {
        $this->weight = $weight;
        $this->name = $name;
    }

    function showMe () {
        if ($this->height>180){
            return $this->name;
        }else {
            return $this->name."不适合";
        }
    }
}

$pingpanger = new PlayPingpangBall('liuyong',110);
echo $pingpanger->showMe();

