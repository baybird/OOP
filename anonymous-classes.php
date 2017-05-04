<?
// Filename      : anonymous-classes.php
// Author        : Robert Tang
// Created       : 5/3/2017
// Description   : * An anonymous class is a local class without a name.
//                 * An anonymous class can not be referenced.
//                 * An anonymous class's instantiation is done at run time, which means
//                   that a new statement in the for loop creates several instances of the
//                   same anonymous class instead of creating an instance of several different
//                   anonymous classes.
//                 * Anonymous classes are useful when simple, one-off objects need to be
//                   created.

trait Smile{
    public function Smile(){
        echo "smiling \n";
    }
}

interface Play{
    public function play();
}

abstract class Human implements Play {
    abstract public function eat();

    public function walk(){
        echo "walking \n";
    }

    public function play(){
        echo "playing \n";
    }

    use Smile;
}

class Boy extends Human {
    function __construct(){
        echo "a boy is:\n";
    }
    public function eat() {
        echo "eatting \n";
    }
}

class Demo {
    public function run(){
        $aBoy = new Boy();
        $aBoy->eat();
        $aBoy->walk();
        $aBoy->smile();
        $aBoy->play();
        echo "\n";
    }
}

# test #######################
(new Demo)->run();

$d = new Demo();
$d->run();

# output
// a boy is:
// eatting
// walking
// smiling
// playing

// a boy is:
// eatting
// walking
// smiling
// playing
