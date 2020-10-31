<?php

class Coordinate
{


    //propeties
    private $x;
    private $y;

    //create construct
    public function __construct($valueX, $valueY)
    {
        $this->x = $valueX;
        $this->y = $valueY;
    }





    //method get X
    public function getCoordinateX()
    {
        return $this->x;
    }
    // method get Y
    public function getCoordinateY()
    {
        return $this->y;
    }

    //method set X
    public function setCoordinateX($value)
    {
        if (is_string($value)) {
            $value = 0;
            $this->x = $value;
        }
        return $this->x = $value;
    }


    //method set Y
    public function setCoordinateY($value)
    {
        if (is_string($value)) {
            $value = 0;
            $this->y = $value;
        }
        return $this->y = $value;
    }


    //method show 
    public function showInfo()
    {
        echo "<br/> toa độ X1" . $this->getCoordinateX();
        echo "<br/> toa độ Y1" . $this->getCoordinateY();
    }

    //method distance
    public function distance($point)
    {
        $distance = ($this->x - $point->x) * ($this->x - $point->x) + ($this->y - $point->y) * ($this->y - $point->y);
        return sqrt($distance);
    }
}
