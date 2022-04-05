<?php
namespace App\Models;

include "BaseModel.php";
class User extends BaseModel{
    public function __construct()
    {
        echo "New ".__NAMESPACE__."\User Object created!\n";
    }
}