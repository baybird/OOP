<?php
// PHP doesn't support overloading
class Area
{
    public function calArea($radious, $width = null){
        if ($radious!= null && $width == null) {
            return $this->calArea4Circle($radious);
        }else if($radious!= null && $width != null){
            return $this->calArea4Rectangle($radious, $width);
        }
    }    
    // public function calArea($radious){
    //     return $this->calArea4Circle($radious);
    // }

    // public function calArea($l, $w){
    //     return $this->calArea4Rectangle($radious, $width);
    // }

    private function calArea4Circle($r){
        return (3.1415926 * pow($r, 2));
    }

    private function calArea4Rectangle($l, $w){
        return ($l * $w);
    }
}

$obj = new Area;
echo $obj->calArea(5); // Circle
echo "\n";

echo $obj->calArea(5, 5); // Rectangle
echo "\n";
