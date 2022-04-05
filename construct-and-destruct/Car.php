<?php
class Car{
    public $brand;
    public $model;
    public $color;
    public function __construct($brand,$model,$color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        echo "$this->color $this->brand $this->model created! \n";
    }

    public function printInfo(){
        echo "Info: $this->color $this->brand $this->model \n";
    }

    public function __destruct(){
        echo "$this->color $this->brand $this->model Destroied! \n";
    }
}

$pride = new Car("Saipa","Pride","White");
echo $pride->printInfo();
$benz = new Car("Benz","Mercedes","Red");
$bmw = new Car("BMW","X6","Blue");


