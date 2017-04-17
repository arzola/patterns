<?php namespace Arzola\Creational\AbstractFactory\Players;


class RawSoldier extends Player
{
    private $name;

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return "i'm a raw soldier bitch!! my name {$this->name}\n";
    }

    public function fight()
    {
        return 'i\'ll fight with bear hands';
    }

}