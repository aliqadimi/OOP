<?php
// include "Person.php";
// include "Teacher.php";
// include "Student.php";
include "autoload.php";
include "App/helpers.php";

use App\Classes\Person;
use App\Classes\Teacher;
use App\Classes\Student;
use App\Classes\User;
use App\Utilities\User as UserUtil;

$r = rand(0,100);
var_dump($r);
if($r < 50){
    $p1 = new Person();
    $p1->printName();    
}

$t1 = new Teacher();
$t1->printName();

$s1 = new Student();
$s1->printName();

$u1 = new User();
$u1->printName();

UserUtil::test();