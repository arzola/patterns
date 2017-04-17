<?php namespace Arzola\Structural\Decorator;


abstract class DecoratorAbstract implements ReciboInterface
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