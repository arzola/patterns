<?php namespace Arzola\Structural\Decorator;

class ConDeducciones extends ReciboDecorator
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