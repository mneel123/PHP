<?php
abstract class car {
    public $name;
    public function __construct($name) {
        $this -> name = $name;
    }
    abstract public function intro() : string;
}

class kia extends car {
    public function intro() : string {
        return "I'm an $this->name!";
    }
}


class maruti extends car {
    public function intro() : string {
        return "I'm an $this->name!";
    }
}


class volvo extends car {
    public function intro() : string {
        return "I'm an $this->name!";
    }
}

$kia = new kia("Kia");
echo $kia -> intro();
echo "<br>";

$maruti = new maruti("Maruti");
echo $maruti -> intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo -> intro();
echo "<br>";
?>