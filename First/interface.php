<?php
interface Animal {
    public function makesound();
}

class cat implements animal {
    public function makesound(){
        echo "Meow ";
    }
}

class dog implements animal {
    public function makesound(){
        echo "Bark ";
    }
}

class mouse implements animal {
    public function makesound(){
        echo "Squeak ";
    }
}

$Cat = new cat();
$Dog = new dog();
$Mouse = new mouse();
$Animals = array($Cat,$Dog,$Mouse);

foreach($Animals as $Animal){
    $Animal -> makesound();
}


?>