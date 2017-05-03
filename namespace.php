<?
// Filename      : namespace.php
// Author        : Robert Tang
// Created       : 5/3/2017
// Description   : A namespace is a mechanism that allows a group of related names to be defined
//                 in one place.
// Problem       : Global variables present many problems in large software systems because they
//                 can be accessed, modified anywhere in the program and can lead to programming errors,
//                 since an important global variable may be hidden by a local variable of the same name.
//                 As a result, it is best to avoid global variables. We may not be able to avoid globals
//                 entirely, however.
//                 Namespace helps organize global objects into natural groups and minimizes
//                 the problems of globals.

namespace projects\p1;
class classname
{
    function __construct()
    {
        echo  "class 1\n";
    }
}

function funcname()
{
    echo "func 1\n";
}

const constname = "1";

// **********************************************
namespace projects\p2;
class classname
{
    function __construct()
    {
        echo  "class 2\n";
    }
}

function funcname()
{
    echo "func 2\n";
}

const constname = "2";

// **********************************************
$a = '\projects\p1\classname';
$obj = new $a;

$a = 'projects\p1\classname';
$obj = new $a;


$b = 'projects\p1\funcname';
$b();
$b = '\projects\p1\funcname';
$b();


echo constant('\projects\p1\constname'), "\n";
echo constant('projects\p1\constname'), "\n";
echo \projects\p1\constname, "\n";