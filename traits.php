<?
# Filename      : traits.php
# Author        : Robert Tang
# Created       : 5/3/2017
# Description   : PHP Traits are a mechanism for code reuse in single inheritance languages such as PHP.
# PHP Version   : 5.4 and above

trait Cpu {
    public function giveMeACpu() {
        return "Intel i7 CPU";
    }
}

trait Ram {
    public function giveMeARam() {
        return "32GB RAM";
    }
}

class Computer {
    use Cpu, Ram;
    private $cpu;
    private $ram;

    function __construct(){
      $this->cpu = $this->giveMeACpu();
      $this->ram = $this->giveMeARam();
    }

    function getInfo(){
      return "Got a computer with ". $this->cpu. " and ".$this->ram;
    }
}

$obj = new Computer();
echo $obj->getInfo();




