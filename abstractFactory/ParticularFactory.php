<?php
namespace abstractFactory;

use abstractFactory\robot\ParticularCleanerRobot;
use abstractFactory\robot\ParticularCookerRobot;
use abstractFactory\room\ParticularKitchen;
use abstractFactory\room\ParticularSalon;
use strategie\CleanRobot;
use strategie\CookRobot;
use strategie\room\Kitchen;
use strategie\room\Salon;

/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:18
 */

class ParticularFactory implements IFactory {
    public function createKitchen(): Kitchen {
        return new ParticularKitchen();
    }
    public function createCooker(): CookRobot {
        return new ParticularCookerRobot();
    }
    public function createCleaner(): CleanRobot {
        return new ParticularCleanerRobot();
    }
    public function createSalon(): Salon {
        return new ParticularSalon();
    }
}