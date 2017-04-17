<?php
use Arzola\Structural\Decorator\Recibo;
use Arzola\Structural\Decorator\HonorariosDecorator;
use Arzola\Structural\Decorator\DeduccionesDecorator;

require __DIR__ . '/vendor/autoload.php';

$reciboHonorariosConDeducciones = new DeduccionesDecorator(new HonorariosDecorator(new Recibo()));
$reciboHonorariosConDeducciones->print();

$reciboNormal = new Recibo();
echo $reciboNormal->print();

$reciboHonorariosNoDeducible = new Recibo();
$reciboHonorariosNoDeducible = new DeduccionesDecorator($reciboHonorariosNoDeducible);
echo $reciboHonorariosNoDeducible->print();