<?php
class Foo {
    public static function who() {
        echo __CLASS__;
    }

    public static function test() {
        // $this->who(); // Error: static function cannot use the this pointer
    }
}

class Bar {
    public static function who() {
        echo "Bar";
    }

    public static function test() {
        self::who();
    }
}

$obj = new Foo;
$obj->who();
echo "\n";

Bar::test();