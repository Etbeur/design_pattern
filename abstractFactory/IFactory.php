<?php
namespace abstractFactory;

use strategie\CleanRobot;
use strategie\CookRobot;
use strategie\room\Kitchen;
use strategie\room\Salon;

/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:19
 */

interface IFactory {
    function createCooker():CookRobot;
    function createCleaner():CleanRobot;
    function createSalon():Salon;
    function createKitchen():Kitchen;
}