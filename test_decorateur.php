<?php

use decorateur\Chocolat;
use decorateur\logger\LoggerFile;
use decorateur\logger\LoggerHtml;
use decorateur\supplement\Chantilly;
use decorateur\supplement\LaitSoja;
use strategie\CookRobot;
use strategie\room\Salon;

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

$salon = new Salon();
$salonLogHtml = new LoggerFile(new LoggerHTML($salon));
$cuistot = new CookRobot();
$salonLogHtml->autoriser($cuistot);