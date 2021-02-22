<?php

class Cars {
    //Property (Need to use var inside class to let php know, outside of class it is ok to use $)
    var $wheel_count = 4;
    var $door_count = 4;
    // functions are nothing but methods
    function car_detail()
    {
        //Use of property inside function
        return "This car has " . $this->wheel_count ." wheels";
    }
}

//Instanciation of class (They will contain whatever the class has)
$bmw = new Cars();
$audi = new Cars();
//Activate the method greeting inside class cars
echo $bmw->wheel_count;
echo "<br>";
echo $audi->door_count;
echo "<br>";
echo $audi->car_detail();

?>