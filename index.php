<?php
require_once "classes/loadClasses.php";

$bike = new Bike("red", 1);

$car = new Car("blue", 5, "fuel");

$skateboard = new Skateboard("grey", 1);

function isItOn(Bool $isIt)
{
    if ($isIt)
        echo "It's on <br>" . PHP_EOL;
    else
        echo "It's not on <br>" . PHP_EOL;
}

echo "bike first try <br>" . PHP_EOL;
isItOn($bike->switchOn());

echo "bike Forward <br>" . PHP_EOL;
$bike->forward();

echo "bike second try <br>" . PHP_EOL;
isItOn($bike->switchOn());

echo "bike off <br>" . PHP_EOL;
isItOn($bike->switchOff());

echo "<br>" . PHP_EOL;

echo "car on <br>" . PHP_EOL;
isItOn($car->switchOn());

echo "car off <br>" . PHP_EOL;
isItOn($car->switchOff());

echo "the skateboard has no switch method  <br>" . PHP_EOL;