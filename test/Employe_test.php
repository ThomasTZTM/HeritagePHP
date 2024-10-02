<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Employe;

// On créer l'employer

$ChefDeProjet = new Employe("Thomas", "MICHELIN", 19);
$ChefDeProjet->presenter();