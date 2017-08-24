<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:30
 */

namespace abstractFactory;


use abstractFactory\robot\ProCleanerRobot;
use abstractFactory\robot\ProCookerRobot;
use abstractFactory\room\ProKitchen;
use abstractFactory\room\ProSalon;
use strategie\CleanRobot;
use strategie\CookRobot;
use strategie\room\Kitchen;
use strategie\room\Salon;

class ProFactory implements IFactory {

    public function createKitchen(): Kitchen {
        return new ProKitchen();
    }
    public function createCooker(): CookRobot {
        return new ProCookerRobot();
    }
    public function createCleaner(): CleanRobot {
        return new ProCleanerRobot();
    }
    public function createSalon(): Salon {
        return new ProSalon();
    }
}