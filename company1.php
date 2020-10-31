<?php
include_once('employee1.php');
class Company
{
    const ENGINEERS = 1;
    const OFFICERS = 2;
    const WORKERS = 3;

    private $Engineers = [];
    private $Officers = [];
    private $Workers = [];

    public function show()
    {

        foreach ($this->Engineers as $Engineer) {
            $Engineer->showEmployee();
        }
        foreach ($this->Officers as $Officer) {
            $Officer->showEmployee();
        }
        foreach ($this->Workers as $Worker) {
            $Worker->showEmployee();
        }
    }
}
