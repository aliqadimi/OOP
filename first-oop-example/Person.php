<?php

class Person{
    public $name = "Ali";
    private $age;
    public function printName(){
        echo "Name: " . $this->name  . PHP_EOL;
    }
    public function printAge(){
        echo "Age: " . $this->age  . PHP_EOL;
    }
    public function setAge($newAge){
        $this->age = $newAge ;
    }
}

class Programmer extends Person{
    public function code(){
        echo "Coding..." . PHP_EOL;
    }
}

// $ali = new Person();
// $ali->name = "Alireza";
// $ali->setAge(55);

// $ali->printName();
// $ali->printAge();

$loghman = new Programmer();
$loghman->name = "Loa";
$loghman->printName();
$loghman->code();

