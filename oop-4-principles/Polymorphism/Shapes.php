<?php

class Shape{
    protected $name = 'Shape';
    public function draw(){
        echo $this->name . PHP_EOL;
    }
}

class Square extends Shape{
    protected $name = 'Square';
    # overriding
    public function draw(){
        echo "+--+" . PHP_EOL;
        echo "+--+" . PHP_EOL;
    }
}

class Circle extends Shape{
    protected $name = 'Circle';
    public function draw(){
        echo "O" . PHP_EOL;
    }
}


$shape = new Shape(); 
$square = new Square(); 
$circle = new Circle(); 
$shapes = [$shape,$square,$circle];
foreach ($shapes as $sh) {
    $sh->draw();
}
// $square->draw();
// $circle->draw();