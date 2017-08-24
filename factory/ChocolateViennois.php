<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:03
 */

namespace factory;


use decorateur\Chocolat;
use decorateur\IBreuvage;

class ChocolateViennois extends ProcessViennois {

    protected function creerBreuvage(): IBreuvage {
        return new Chocolat();
    }
}