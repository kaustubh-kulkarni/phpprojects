<?php

class Cars {

//creating a function
function greeting(){

}
//Another function
function greeting2() {

}

}

//find if the method exists in class Cars
$my_methods = get_class_methods('Cars');

foreach ($my_methods as $method) {
    echo $method . "<br>";
}





?>