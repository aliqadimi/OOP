<?php

class Person{
    public $name;
    private $nationalCode;
    private $age;
    protected $income;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
        $this->setNationalCode(rand(100,1000));
    }

    # setters
    public function setNationalCode($nationalCode){
        // if(isSabtAhval()){
            $this->nationalCode = $nationalCode;
        // }
    }    
    public function setAge($age){
        $this->age = $age;
    }
    public function setIncome($income){
        $this->income = $income;
    }
    # getters
    public function getNationalCode(){
        return $this->nationalCode;
    }    
    public function getAge(){
        return $this->age;
    }
    public function getIncome(){
        return $this->income;
    }
}

$loghman = new Person("Loghman Avand",32);
echo $loghman->name . PHP_EOL;
echo $loghman->getAge() . PHP_EOL;
$loghman->setIncome(5000000);
echo $loghman->getIncome() . PHP_EOL;
echo $loghman->getNationalCode() . PHP_EOL;