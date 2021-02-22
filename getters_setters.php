<?php

class Cars {
    //Property (Need to use var inside class to let php know, outside of class it is ok to use $)
    private $door_count = 4; 
    // functions are nothing but methods
    function get_values()
    {
     echo $this->door_count;
    }

    function set_values()
    {
     $this->door_count = 10; 
    }
}

//Instanciation of class (They will contain whatever the class has)
$bmw = new Cars();

$bmw->set_values();
$bmw->get_values();
?>