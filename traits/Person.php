<?php
include "traits.php";

class Person{
    private $nationalCode;

    use hasName,toString,Singleton;
    
}