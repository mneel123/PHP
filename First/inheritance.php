<?php
class cars {
    public $name;
    public $color;
    public function __construct($name, $color){
        $this -> name = $name;
        $this -> color = $color;
    }
    //public 
    protected function intro(){
        echo "The car is {$this -> name} and The color is {$this -> color}.";
    }
}

class kia extends cars {
    public function message() {
        echo "Color is black Or Mid Night Blue ?";
        echo "<br>";
        echo "<br>";
        //$this -> intro();
    }
}
$kia = new kia("kia","Black");
$kia -> message();
//$kia -> intro();

?>