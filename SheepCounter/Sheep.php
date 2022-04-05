<?php
class Sheep{
    private $name;
    private static $count;
    public function __construct()
    {
        $this->name = "Sheep-" . rand(100,999);
        self::$count++;
    }
    public function baaa(){
        echo "$this->name : Ba" . str_repeat('a',rand(1,10)) . PHP_EOL;
    }

    public static function getCount(){
        return self::$count;
    }
    
}