<?php

use adaptateur\Humain;
use command\action\ComRobotCommand;
use command\action\TaskRobotCommand;
use command\action\WatchVideoHumainCommand;
use command\RemoteControl;
use strategie\CookRobot;

/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 11:24
 */

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}
spl_autoload_register('myLoader');

$robot = new CookRobot();
$humain = new Humain('johnson', 'john');
$telecommande = new RemoteControl();

$telecommande->addAction(new TaskRobotCommand($robot));
$telecommande->addAction(new ComRobotCommand($robot));
$telecommande->addAction(new WatchVideoHumainCommand($humain));

$telecommande->pushOnButton(0);
$telecommande->pushOnButton(1);
$telecommande->pushOnButton(2);

$telecommande->cancelButton();
$telecommande->cancelButton();
$telecommande->cancelButton();