<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 12:12
 */

use adaptateur\calculette\AdaptateurCalculette;
use adaptateur\calculette\Comptabilite;
use adaptateur\calculette\OldCalculette;
use adaptateur\Humain;
use adaptateur\HumainRobotAdaptateur;
use strategie\room\Kitchen;


function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}
spl_autoload_register('myLoader');


$cuisine = new Kitchen();
$jack = new Humain('Bin', 'Jack');
$adapateur = new HumainRobotAdaptateur($jack);

$cuisine->autoriser($adapateur);
$adapateur->doTask();

$old = new OldCalculette();
$adapteurCalc = new AdaptateurCalculette($old);
$compta = new Comptabilite($adapteurCalc);
$compta->faireLaCompta();