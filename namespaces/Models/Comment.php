<?php
namespace App\Models;

include "BaseModel.php";
class Comment extends BaseModel{
    public function __construct()
    {
        echo "New ".__NAMESPACE__."\Comment Object created!\n";
    }
}