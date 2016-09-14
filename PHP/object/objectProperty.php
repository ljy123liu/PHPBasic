/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/19/16
 * Time: 4:59 PM
 */

class  Car {
    public $name = 'car';
    public  function __clone()
    {
        // TODO: Implement __clone() method.
        $obj = new Car();
        $obj->name = $this->name;
    }
}   

$a = new Car();
$a->name = 'new car';
$b = clone $a;
if ($a == $b) echo '==';
if ($a === $b) echo '===';

$str = serialize($a);
echo $str.'<br>';
$c = unserialize($str);
var_dump($c);


