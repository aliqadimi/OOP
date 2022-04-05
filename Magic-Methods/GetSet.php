<?php
class Math{
    public function sum($numbers){
        $sum = 0;
        foreach($numbers as $num){
            $sum += (int)$num;
        }
        return $sum;
    }
    public static function mul($numbers){
        $mul = 1;
        foreach($numbers as $num){
            $mul *= (int)$num;
        }
        return $mul;
    }
}

class GetSet
{
    private $id = 50;
    private $data;

    public function __get($prop)
    {
        // echo "property [$prop] is not accessible!\n";
        if (isset($this->data[$prop])) {
            return $this->data[$prop];
        } else {
            echo "property $prop not defined!";
        }
    }
    public function __set($prop, $value)
    {
        // echo "in __set() : $prop => $value \n";
        $this->data[$prop] = $value;
    }

    public function __call($name, $arguments)
    {
        $math = new Math();
        if(method_exists($math,$name)){
            return $math->{$name}($arguments);
        }else{
            echo "method [Math->$name] not exists.";
        }
        // echo "in __call: $name(" . implode(",", $arguments) . ")";
    }
    public static function __callStatic($name, $arguments){
        return Math::{$name}($arguments);
    }
}

$gs = new GetSet();
// $gs->name = "Loghman";
// $gs->family = "Avand";
// $gs->age = 32;
// echo $gs->age;
// echo $gs->id;
// print_r($gs->data);
// var_dump($gs);

echo $gs->sum(1,4,7) . PHP_EOL;
echo $gs::mul(1,4,7);
