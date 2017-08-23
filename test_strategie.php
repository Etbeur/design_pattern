<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/08/17
 * Time: 11:34
 */

use strategie\room\Bedroom;
use strategie\room\Kitchen;
use strategie\room\Salon;
use strategie\cleanRobot;
use strategie\CookRobot;
use strategie\RoombaRobot;

function myLoader($classname) {
    $class = str_replace('\\', '/', $classname);
    require ($class . '.php');
}

spl_autoload_register('myLoader');

$cleanRobot = new CleanRobot();
$cookRobot = new CookRobot();
$roomba = new RoombaRobot();

$cookRobot->doTask();
$roomba->doTask();
$cleanRobot->doTask();

$salon = new Salon();
$kitchen = new Kitchen();
$bedroom = new Bedroom();

$salon->autoriser($roomba);
$kitchen->autoriser($roomba);
$bedroom->autoriser($roomba);