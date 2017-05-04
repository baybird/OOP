<?
// Filename      : object-iteration.php
// Author        : Robert Tang
// Created       : 5/3/2017
// Description   : PHP5 provides a way iterate object as using an array,
//                 you can use foreach to traverse the properties of the
//                 object. By default, external iterations can only get
//                 the value of an externally visible property.

class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
       foreach ($this as $key => $value) {
           print "$key => $value\n";
       }
       echo "\n\n";
    }
}

$class = new MyClass();

echo "Internal ********************\n";
$class->iterateVisible();

echo "External ********************\n";
foreach($class as $key => $value) {
    print "$key => $value\n";
}

