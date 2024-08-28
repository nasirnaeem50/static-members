<?php
class Base{
    public static $name="nasir";
    public static function sum($a,$b){ 
        echo $a+$b;
    }
}
echo Base::$name;
echo Base::sum(4,5);
?>