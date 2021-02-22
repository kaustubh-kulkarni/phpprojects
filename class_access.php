<?php

class Cars {
    //Property (Need to use var inside class to let php know, outside of class it is ok to use $)
    public $wheel_count = 4;
    private $door_count = 4;
    protected $seat_count = 2;
    // functions are nothing but methods
    function car_detail()
    {
     echo $this->wheel_count;
     echo $this->door_count;
     echo $this->seat_count;
    }
}

//Instanciation of class (They will contain whatever the class has)
$bmw = new Cars();

// echo $bmw->wheel_count;
// echo $bmw->seat_count;
$bmw->car_detail();
?>