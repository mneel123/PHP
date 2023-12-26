<?php
class cars {
    public $name;
    public $color;

    function __construct($name , $color){
        $this -> name = $name;
        $this -> color = $color; 
    }
    function __destruct(){
        echo "The car is {$this -> name} and the color is {$this -> color}.";
    }
}

$kia = new cars("kia", "black");
?>