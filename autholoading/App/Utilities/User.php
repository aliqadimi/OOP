<?php
namespace App\Utilities;

class User{
    public function __construct()
    {
        echo "New ".__NAMESPACE__."\User Object created!\n";
    }
    public static function test(){
        echo "UserUtil: Test()\n";
    }
}