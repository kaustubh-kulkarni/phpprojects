<?php

class Cars {
    //Property (Need to use var inside class to let php know, outside of class it is ok to use $)
    static $wheel_count = 4;
    static $door_count = 4;
    
    // functions are nothing but methods
    static function car_detail()
    {
     return self::$wheel_count . self::$door_count;
    }
}

class Trucks extends Cars {
    static function display(){
        echo parent::car_detail();
    }
}

echo Trucks::display();
?>