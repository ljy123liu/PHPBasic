<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/7/16
 * Time: 5:35 PM
 */
class People {
    /**
     * Man constructor.
     * @param int $age 这个人的年龄
     * @param string $name 这个人的名字
     * @param string $sex 这个人的性别
     */
    public function __construct($age,$name,$sex)
    {
        $this -> _age = $age;
        $this -> _name = $name;
        $this -> _sex = $sex;
        
        People::$NUM++;
        if (People::$NUM > People::MAX_MAN_NUM){
            throw new  Exception("创建上限为200!");
        }
    }

    public function getAge(){
        return $this -> _age;
    }

    public function getName(){
        return $this -> _name;
    }

    public function hi(){
        echo $this ->  _name." say hi";
    }


    private  $_age,$_name,$_sex;

    private static $NUM = 0;

    const MAX_MAN_NUM = 200;

    //static 类方法,静态方法
    public static function sayHello(){
        echo "man's 类方法"."<br>";
    }
}