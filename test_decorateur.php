<?php

use decorateur\Chocolat;
use decorateur\supplement\Chantilly;
use decorateur\supplement\LaitSoja;

/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 12:26
 */

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}
spl_autoload_register('myLoader');

$chocolat = new Chocolat();
echo $chocolat->getDescription() . ' à ' . $chocolat->getPrix() . '€';
echo '<br/>';

$chocoChantilly = new Chantilly($chocolat);
echo 'un super' . $chocoChantilly->getDescription() . ' à ' . $chocoChantilly->getPrix() . '€';
echo '<br/>';

$chocoChantillySoja = new LaitSoja($chocoChantilly);
echo 'un hyper ' . $chocoChantillySoja->getDescription() . ' à ' . $chocoChantillySoja->getPrix() . '€';