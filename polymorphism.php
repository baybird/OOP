<?php
class Foo
{
    public function dispaly() {
        echo  'this is foo';
    }

    // public function getName(){
    //   echo "foo";
    // }
}

class Bar
{
  public function dispaly() {
    echo 'this is bar';
  }

  public function getName(){
    echo "bar \n";
  }
}

class Baz
{
  public function dispaly() {
    echo 'this is bar';
  }

  public function getName(){
    echo "baz \n";
  }
}


$foo = new Foo();
$bar = new Bar();
$baz = new Baz();

$exit = false;
while($exit == false){
  echo "0) exit \n";
  echo "1) Make base react as Bar \n";
  echo "2) Make base react as Baz \n";
  echo "Enter your choice [0-2]:";


  if (PHP_OS == 'WINNT') {
    $choice = stream_get_line(STDIN, 1024, PHP_EOL);
  } else {
    $choice = readline('$ ');
  }

  if ($choice == 1) { // Bar
    $foo = & $bar; // dynamic binding and referenced by a reference
  }else if ($choice == 2) {// Baz
    $foo = & $baz;
  }else{
    $exit = 1;
  }


  $foo->dispaly();
  echo "\n";

  $foo->getName();
  echo "\n";
};


