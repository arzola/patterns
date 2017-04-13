<?php
use Arzola\Structural\Decorator\Recibo;
use Arzola\Structural\Decorator\ReciboHonorarios;
use Arzola\Structural\Decorator\ConDeducciones;

require __DIR__ . '/vendor/autoload.php';

$reciboHonorariosConDeducciones = new ConDeducciones(new ReciboHonorarios(new Recibo()));
$reciboHonorariosConDeducciones->print();

$reciboNormal = new Recibo();
echo $reciboNormal->print();

$reciboHonorariosNoDeducible = new ConDeducciones(new Recibo());
echo $reciboHonorariosNoDeducible->print();