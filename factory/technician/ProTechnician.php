<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:14
 */

namespace factory\technician;


use abstractFactory\IFactory;
use abstractFactory\ProFactory;

class ProTechnician extends AbstractTechnician {

    protected function creerFabrique(): IFactory {
        return new ProFactory();
    }
}