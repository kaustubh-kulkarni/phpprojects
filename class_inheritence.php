<?php

class Cars 
    {
    var $wheels = 4;
//creating a function
    function greeting()
        {
        return "Hello World!";
        }
    }
$bmw = new Cars();
//Inheritence of class cars into trucks
class Trucks extends Cars
    {

    }
$toyota = new Trucks();

echo $toyota->wheels;



?>