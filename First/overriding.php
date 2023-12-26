<?php
class cars {
    public $name;
    public $color;
    public function __construct($name, $color){
        $this -> name = $name;
        $this -> color = $color;
    }
    //public 
    public function intro(){
        echo "The car is {$this -> name} and The color is {$this -> color}.";
    }
}

class kia extends cars {
    public $weight;
    public function __construct($name, $color , $weight) {
       $this -> name = $name;
       $this -> color = $color;
       $this -> weight = $weight;
    }
    public function intro(){
        echo "The car is {$this -> name} , The color is {$this -> color} and the weight is {$this -> weight} KG.";
    }
}
$kia = new kia("kia","Black",300);
// $kia -> message();
$kia -> intro();

?>