<?php
class Foo
{
    private $name;

    public function dispaly() {
        echo  'this is foo';
    }

    public function setName($name){
      $this->name = $name;
    }

    public function getName(){
      return $this->name;
    }
}

class Bar extends Foo
{
  public function __construct(){
    $this->setName("Bar");
  }

  public function dispaly() {
    echo 'this is '. $this->getName();
  }

}

class Baz extends Foo
{
  public function __construct(){
    $this->setName("Baz");
  }

  public function dispaly() {
    echo 'this is '. $this->getName();
  }
}

// Test
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
    $choice = readline('');
  }

  if ($choice == 1) { // Bar
    // For dynamic binding and referenced by a reference
    $foo = & $bar;
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


