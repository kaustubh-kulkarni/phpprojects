<?php

class Cars {
    // functions are nothing but methods
    function greeting()
    {
        echo "Hello World!";
    }
}

//Instanciation of class (They will contain whatever the class has)
$bmw = new Cars();
$audi = new Cars();
//Activate the method greeting inside class cars
$bmw->greeting();

?>