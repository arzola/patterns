<?php namespace Arzola\Structural\Decorator;

class Recibo implements ReciboInterface
{
    public function print()
    {
        $recibo = "=====RECIBO======\n";
        $recibo .= "=              =\n";
        $recibo .= "=              =\n";
        $recibo .= "=  NORMAL      =\n";
        $recibo .= "=              =\n";
        $recibo .= "=              =\n";
        $recibo .= "=              =\n";
        $recibo .= "================\n";
        return $recibo;
    }
}