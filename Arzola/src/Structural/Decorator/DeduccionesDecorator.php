<?php namespace Arzola\Structural\Decorator;

class DeduccionesDecorator extends DecoratorAbstract
{
    public function print()
    {
        $recibo = parent::print();
        $recibo .= "=              =\n";
        $recibo .= "=  - DEDUCCI   =\n";
        $recibo .= "================\n";
        return $recibo;
    }
}