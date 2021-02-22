<?php

class Cars {
    //Property (Need to use var inside class to let php know, outside of class it is ok to use $)
    public $wheel_count = 4;
    // constructor
    function __construct()
    {
     echo $this->wheel_count;
    }
}

//Instanciation of class (They will contain whatever the class has)
$bmw = new Cars();

// $bmw->car_detail();
?>