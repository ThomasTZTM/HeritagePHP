<?php

// On met le use de la classe qu'on veut

use App\Patron;

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On créer l'employer

$leboss = new Patron("LAMY", "Franck", 45, "BMW M3 E46");
$leboss->presenter();
$leboss->deplacer();