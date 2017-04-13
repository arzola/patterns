<?php namespace Arzola\Structural\Decorator;

class ReciboHonorarios extends ReciboDecorator
{
    public function print()
    {
        $recibo = parent::print();
        return str_replace('NORMAL', 'HONORA', $recibo);
    }
}