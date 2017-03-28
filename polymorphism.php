<?php
class Foo
{
    public function dispaly() {
        echo  'foo';
    }

    public function getName(){
      echo "this is foo";
    }
}

class Bar extends Foo
{
  public function dispaly() {
    echo 'bar';
  }

  // public function getName(){
  //     echo "this is bar \n";
  //   }
}


$foo = new Foo();
$bar = new Bar();

$foo = $bar;
$foo->dispaly();
echo "\n";

$foo->getName();
echo "\n";
