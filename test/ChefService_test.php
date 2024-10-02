<?php

// On met le use de la classe qu'on veut

use App\ChefService;

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On créer l'employer

$leboss = new ChefService("DAVID", "Dominique", 90, "Réseau");
$leboss->presenter();
$leboss->servir();