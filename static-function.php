<?php
// Late Static Bindings
class Foo {
    public static function who() {
        echo __CLASS__;
    }

    public static function test() {
        // $this->who(); // Error: static function cannot use the this pointer
    }
}

class Bar extends Foo{
    public static function who() {
        echo __CLASS__;
    }

    public static function test() {
        self::who();
    }
}

Bar::test();
// output
// Bar