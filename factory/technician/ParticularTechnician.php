<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:12
 */

namespace factory\technician;


use abstractFactory\IFactory;
use abstractFactory\ParticularFactory;

class ParticularTechnician extends AbstractTechnician {

    protected function creerFabrique(): IFactory {
        return new ParticularFactory();
    }
}