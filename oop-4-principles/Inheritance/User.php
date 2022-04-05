<?php
include_once 'BaseModel.php';
class User extends BaseModel
{
    protected $table = 'users';

}

$user = new User();
$userData = $user->find(6);
// $userData = $user->delete(8);
var_dump($userData);