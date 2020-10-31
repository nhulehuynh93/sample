<?php


class Circuit
{
    public function showCircuit($pointA, $pointB, $pointC)
    {

        $disAB = $pointA->distance($pointB);
        $disBC = $pointB->distance($pointC);
        $disAC = $pointA->distance($pointC);
        return $disAB + $disBC + $disAC;
    }
}
