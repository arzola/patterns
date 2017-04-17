<?php namespace Arzola\Structural\Decorator;

class HonorariosDecorator extends DecoratorAbstract
{
    public function print()
    {
        $recibo = parent::print();
        return str_replace('NORMAL', 'HONORA', $recibo);
    }
}