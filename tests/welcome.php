<?php

use Tools\Calculator\EasyCalculator as Calculette;
use Tools\Generator\TokenGenerator as Generator;

require_once "../vendor/autoload.php";

$ajouter = Calculette::ajouter(3,2);
$soustraire = Calculette::soustraire(5,2);
$multiplier = Calculette::multiplier(5,2);
$diviser = Calculette::diviser(10,2);
$diviserError = Calculette::diviser(1,0);

$generator = new Generator();

echo $generator->MakeItHappenBabe();

