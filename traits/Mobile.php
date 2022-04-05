<?php
include "traits.php";
class Mobile{
    private $brand = 'Samsung';
    private $cpu = 'Snapdragon 755';
    use hasName,toString,ArrayOrJson,Singleton;
}

$mob = Mobile::getInstance();
$mob->setName('Galaxy s20');
echo $mob->getName() . PHP_EOL;
// $mob->toStringPrint();
var_dump($mob->asArray());
var_dump($mob->asJson());

$mob2 = Mobile::getInstance();

var_dump($mob == $mob2);
