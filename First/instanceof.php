<?php
class fruit {
    public $name;
    public $color;
    function set_name($name) {
        $this -> name = $name;
    }
    function get_name(){
        return $this -> name;
    }
}

$apple = new fruit();
var_dump($apple instanceof fruit);


?>