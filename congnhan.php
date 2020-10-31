<?php

require_once('employee1.php');

class CongNhan extends CanBo
{
    private $level;

    public function getLevel()
    {
        return $this->level;
    }
    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function showCongNhan()
    {
        parent::showEmployee();
        echo $this->getLevel();
    }

    public function __construct($name, $address, $gender, $level)
    {
        parent::__construct($name, $address, $gender);
        $this->level = $level;
    }
}
