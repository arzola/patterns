<?php namespace Arzola\Structural\Decorator;


abstract class ReciboDecorator implements ReciboInterface
{
    private $recibo;

    public function __construct(ReciboInterface $r)
    {
        $this->recibo = $r;
    }

    public function print()
    {
        return $this->recibo->print();
    }

}