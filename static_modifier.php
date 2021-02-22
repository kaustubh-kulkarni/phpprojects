<?php

class Cars {
    //Property (Need to use var inside class to let php know, outside of class it is ok to use $)
    static $wheel_count = 4;
    static $door_count = 4;
    
    // functions are nothing but methods
    static function car_detail()
    {
     echo Cars::$wheel_count;
     echo Cars::$door_count;
    }
}

//Instanciation of class (They will contain whatever the class has)
$bmw = new Cars();
//For static variables we call it this way
echo Cars::$door_count;
//For function we use the same
echo Cars::car_detail();
?>