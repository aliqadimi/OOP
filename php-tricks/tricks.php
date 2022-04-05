<?php
class Person{
    public $name;
    public $father;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function prinName()
    {
        echo $this->name . PHP_EOL;
    }
}

$p1 = new Person('Sara');
$p2 = clone $p1;  # p2 is a reference to p1
$p2->prinName();
$p2->name = 'Loghman';
$p2->prinName();
$p1->prinName();

$p2arr = (array)$p2;   # convert object to array
$p3 = (object)$p2arr;       # convert array to object 

var_dump($p2arr);
var_dump($p3);

$p3->prinName();
