<?php namespace Arzola\Creational\AbstractFactory;

class FactoryMethod
{
    public static function makePlayer(string $type, $params = []) : PlayerAbstractFactory
    {
        switch ($type) {
            case 'human':
                return new HumanFactory();
                break;
            case 'alien':
                return new AlienFactory();
                break;
            case 'hibryd':
                return new HibrydFactory();
                break;
            default:
                throw new \Exception('Tienes que especificar un tipo existente human|alien|hibryd');
        }
    }
}