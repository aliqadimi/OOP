<?php
include "Sheep.php";

for($i=0;$i< rand(1,200);$i++){
    $s = new Sheep();
    $s->baaa();
}
$s2 = new Sheep();
$s3 = new Sheep();

echo $s2::getCount();
echo PHP_EOL;
echo $s3::getCount();
echo PHP_EOL;
echo Sheep::getCount();
