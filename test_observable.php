<?php

use observable\ObservableCleanRobot;
use observable\ObservableSalon;
use observable\OverlordRobot;
use observable\RoombaKiller;


/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:55
 */

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}
spl_autoload_register('myLoader');
$overlord = new OverlordRobot();
$roomba = new RoombaKiller();
$menager = new ObservableCleanRobot();
$salon = new ObservableSalon();

$overlord->addObservable($roomba);
$overlord->addObservable($menager);
$overlord->addObservable($salon);

$overlord->enslaveHumanite();
$overlord->enslaveHumanite();
$overlord->enslaveHumanite();

$overlord->reload();
$overlord->reload();
$overlord->reload();