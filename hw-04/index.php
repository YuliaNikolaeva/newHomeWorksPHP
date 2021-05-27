<?php

include 'vendor/autoload.php';

$car = new homeWork04\Car();
echo $car->start() . PHP_EOL;
echo $car->up(60) . PHP_EOL;
echo $car->up(300) . PHP_EOL;
echo $car->down(70) . PHP_EOL;
echo $car->lghtInCabin() . PHP_EOL;
echo $car->lghtInCabin() . PHP_EOL;
echo $car->headlights() . PHP_EOL;
echo $car->headlights() . PHP_EOL;

