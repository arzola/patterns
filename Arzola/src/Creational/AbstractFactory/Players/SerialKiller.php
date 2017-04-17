<?php namespace Arzola\Creational\AbstractFactory\Players;


class SerialKiller extends Player
{
    public function getName()
    {
        return "You'll be death, i'm a serial killer\n";
    }

    public function fight()
    {
        return 'i\'ll kill you';
    }

}