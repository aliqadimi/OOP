<?php
namespace App\Classes;
class Person{
    private $name;
    public function __construct()
    {
        $this->name = static::class . "-" . rand(100,999);
    }
    public function printName()
    {
        echo $this->name . PHP_EOL;
    }
}