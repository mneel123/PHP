<?php

class A {
public static function welcome() {
    echo "hello world";
    }
}

class B {
    public static function message() {
        A::welcome();
        }
    }

    $obj = new B();
    echo $obj -> message();
?>