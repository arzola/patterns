<?php
require_once __DIR__ . '/vendor/autoload.php';

use Arzola\Creational\AbstractFactory\FactoryMethod;

$factory = FactoryMethod::makePlayer('human');
$player = $factory->createPlayer();

echo $player->getName();
echo $player->fight();