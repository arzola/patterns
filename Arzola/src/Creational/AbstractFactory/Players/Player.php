<?php namespace Arzola\Creational\AbstractFactory\Players;

abstract class Player
{
    public function getName()
    {
        return 'Player Name';
    }

    public function fight()
    {
        return 'Player fight like a player';
    }

}