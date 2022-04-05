<?php

class A{

    public function __toString(){
        return "an object of " . self::class;
    }
    public function __invoke($arr){
        var_dump($arr);
        echo "__invoke called!";
    }
    public function __clone(){
        echo "an object was cloned!"; 
    }

    public function __debugInfo() {
        return [
            'className' => self::class,
            'line' => __LINE__
        ];
    }

    
}
$c = "ccc";
$a = new A();
// echo $a . $c;
// $a([1,2,3]);
var_dump($a);

$b = clone $a;