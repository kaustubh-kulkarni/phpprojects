<?php

class Cars {
    // functions are nothing but methods


}

//to get all the functions declared by php
$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class . "<br>";
}


?>