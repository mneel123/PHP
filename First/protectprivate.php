<?php 
class car {
    public $name;
    public $color;
    public $weight;

    function set_name($n) {
        $this -> name = $n;
    }
    protected function set_color($n) {
        $this -> color = $n;
    }
    private function set_weight($n) {
        $this -> weight = $n;
    }
}

$kia = new car();
$kia -> set_name('Kia');
$kia -> set_color('Black');
$kia -> set_weight('500 KG')
?>