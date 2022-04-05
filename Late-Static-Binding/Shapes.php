<?php

class Shape{
    public function draw(){
        echo static::class . PHP_EOL;
    }
}

class Square extends Shape{

}

class Circle extends Shape{

}

$shape = new Shape();
$square = new Square();
$circle = new Circle();

echo $shape->draw();
echo $square->draw();
echo $circle->draw();
