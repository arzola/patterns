<?php namespace Arzola\Creational\AbstractFactory;

use Arzola\Creational\AbstractFactory\Players\RawSoldier;
use Arzola\Creational\AbstractFactory\Players\SerialKiller;

class HumanFactory implements PlayerAbstractFactory
{
    public function createPlayer($options = [])
    {
        return new RawSoldier('player-' . random_int(1, 200));
    }

    public function createAgressivePlayer($options = [])
    {
        return new SerialKiller();
    }
}