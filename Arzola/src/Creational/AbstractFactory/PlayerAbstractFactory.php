<?php namespace Arzola\Creational\AbstractFactory;

interface PlayerAbstractFactory
{
    public function createPlayer($options = []);
    public function createAgressivePlayer($options = []);
}